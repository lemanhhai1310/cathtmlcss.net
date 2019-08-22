jQuery(document).ready(function($){
    mobile_menu_init();
});
function mobile_menu_init() {
    var toggleButton = jQuery('.mobile_menu_toggler');
    var menuButton = jQuery('.m_nav_menu');
    var menuButtonBars = jQuery('.m_nav_ham');
    toggleButton.click(function(f){
        f.preventDefault();
        jQuery(this).toggleClass('active_mobile_menu');
        jQuery('#mobile_menu').slideToggle();
        if(jQuery(this).hasClass('active_mobile_menu')) {
            menuButtonBars.removeClass('button_closed');
            menuButtonBars.addClass('button_open');
            jQuery(".m_ham_1").addClass("m_nav_ham_1_open");
            jQuery(".m_ham_2").addClass("m_nav_ham_2_open");
            jQuery(".m_ham_3").addClass("m_nav_ham_3_open");
            jQuery("html").addClass("uk-overflow-hidden");
            jQuery("#menu_content").addClass("uk-active");
            jQuery("#nav_mobile").addClass("uk-navbar-transparent");
            jQuery("#nav_mobile .uk-logo").addClass("uk-hidden");
        } else  {
            menuButtonBars.removeClass('button_open');
            menuButtonBars.addClass('button_closed');
            jQuery(".m_ham_1").removeClass("m_nav_ham_1_open");
            jQuery(".m_ham_2").removeClass("m_nav_ham_2_open");
            jQuery(".m_ham_3").removeClass("m_nav_ham_3_open");
            jQuery("html").removeClass("uk-overflow-hidden");
            jQuery("#menu_content").removeClass("uk-active");
            jQuery("#nav_mobile").removeClass("uk-navbar-transparent");
            jQuery("#nav_mobile .uk-logo").removeClass("uk-hidden");
            
        }
    });
}