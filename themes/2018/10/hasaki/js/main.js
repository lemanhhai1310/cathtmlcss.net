function hover_menu_left() {
    var firstTime = true;
    var top = -1;

    var timer;
    var delay = 100;

    $('.col_menu_cap1').menuAim({
        rowSelector: ".sub_item_menu",
        submenuDirection: "right",
        activate: function (a) {
            if (firstTime) {
                $(a).addClass('active').children('.conten_hover_submenu').css({display: 'block'});
            } else {
                $(a).addClass('active').children('.conten_hover_submenu').show();
            }
        },
        deactivate: function (a) {
            $(a).removeClass('active').children('.conten_hover_submenu').hide();
            //top = -1;
        },
        exitMenu: function () {
            firstTime = true;
            $('.conten_hover_submenu').hide();
            $('.sub_item_menu').removeClass('active');
            // top = -1;
            return true;
        }
    });
}

$.fn.menuAim = function (opts) {
    // Initialize menu-aim for all elements in jQuery collection
    this.each(function () {
        init.call(this, opts);
    });
    return this;
};

function init(opts) {
    var $menu = $(this),
        activeRow = null,
        mouseLocs = [],
        lastDelayLoc = null,
        timeoutId = null,
        options = $.extend({
            rowSelector: "> li",
            submenuSelector: "*",
            submenuDirection: "right",
            tolerance: 75,
            enter: $.noop,
            exit: $.noop,
            activate: $.noop,
            deactivate: $.noop,
            exitMenu: $.noop
        }, opts);
    var MOUSE_LOCS_TRACKED = 3,
        DELAY = 300;

    var mousemoveDocument = function (e) {
        mouseLocs.push({x: e.pageX, y: e.pageY});
        if (mouseLocs.length > MOUSE_LOCS_TRACKED) {
            mouseLocs.shift();
        }
    };
    var mouseleaveMenu = function () {
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        if (options.exitMenu(this)) {
            if (activeRow) {
                options.deactivate(activeRow);
            }

            activeRow = null;
        }
    };
    var mouseenterRow = function () {
            if (timeoutId) {
                // Cancel any previous activation delays
                clearTimeout(timeoutId);
            }

            options.enter(this);
            possiblyActivate(this);
        },
        mouseleaveRow = function () {
            options.exit(this);
        };
    var clickRow = function () {
        activate(this);
    };
    var activate = function (row) {
        if (row == activeRow) {
            return;
        }

        if (activeRow) {
            options.deactivate(activeRow);
        }

        options.activate(row);
        activeRow = row;
    };
    var possiblyActivate = function (row) {
        var delay = activationDelay();
        if (delay) {
            timeoutId = setTimeout(function () {
                possiblyActivate(row);
            }, delay);
        } else {
            activate(row);
        }
    };
    var activationDelay = function () {
        if (!activeRow || !$(activeRow).is(options.submenuSelector)) {
            // If there is no other submenu row already active, then
            // go ahead and activate immediately.
            return 0;
        }

        var offset = $menu.offset(),
            upperLeft = {
                x: offset.left,
                y: offset.top - options.tolerance
            },
            upperRight = {
                x: offset.left + $menu.outerWidth(),
                y: upperLeft.y
            },
            lowerLeft = {
                x: offset.left,
                y: offset.top + $menu.outerHeight() + options.tolerance
            },
            lowerRight = {
                x: offset.left + $menu.outerWidth(),
                y: lowerLeft.y
            },
            loc = mouseLocs[mouseLocs.length - 1],
            prevLoc = mouseLocs[0];
        if (!loc) {
            return 0;
        }

        if (!prevLoc) {
            prevLoc = loc;
        }

        if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x ||
            prevLoc.y < offset.top || prevLoc.y > lowerRight.y) {
            // If the previous mouse location was outside of the entire
            // menu's bounds, immediately activate.
            return 0;
        }

        if (lastDelayLoc &&
            loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y) {
            // If the mouse hasn't moved since the last time we checked
            // for activation status, immediately activate.
            return 0;
        }
        function slope(a, b) {
            return (b.y - a.y) / (b.x - a.x);
        }
        ;
        var decreasingCorner = upperRight,
            increasingCorner = lowerRight;
        if (options.submenuDirection == "left") {
            decreasingCorner = lowerLeft;
            increasingCorner = upperLeft;
        } else if (options.submenuDirection == "below") {
            decreasingCorner = lowerRight;
            increasingCorner = lowerLeft;
        } else if (options.submenuDirection == "above") {
            decreasingCorner = upperLeft;
            increasingCorner = upperRight;
        }

        var decreasingSlope = slope(loc, decreasingCorner),
            increasingSlope = slope(loc, increasingCorner),
            prevDecreasingSlope = slope(prevLoc, decreasingCorner),
            prevIncreasingSlope = slope(prevLoc, increasingCorner);
        if (decreasingSlope < prevDecreasingSlope &&
            increasingSlope > prevIncreasingSlope) {

            lastDelayLoc = loc;
            return DELAY;
        }

        lastDelayLoc = null;
        return 0;
    };
    $menu
        .mouseleave(mouseleaveMenu)
        .find(options.rowSelector)
        .mouseenter(mouseenterRow)
        .mouseleave(mouseleaveRow)
        .click(clickRow);
    $(document).mousemove(mousemoveDocument);
}

$(document).ready(function() {
    hover_menu_left();
});

$(window).on("load", function (e) {
    $('#sub_menu_web, #box_acc').hover(
        function () {
            $('.mask_menu').fadeIn(300);
        },
        function () {
            $('.mask_menu').stop(true, true).fadeOut(300);
        }
    );
});