<div class="btn-sidebar uk-text-right" uk-sticky="offset: 65">
    <div class="uk-position-relative">
        <a class="uk-button uk-button-default btn2 btn2-click" href="javascript: void(0)" uk-toggle="target: #toggle-usage; animation: uk-animation-slide-left; mode: click, media;" uk-tooltip="Ẩn các trận đấu"><img src="imgs/arrow1.png" alt=""></a>
    </div>
</div>
<div class="trandau uk-position-relative" id="toggle-usage">
    <h2 class="title_tb live" style="color: #d4d4d4">Trận đấu đang diễn ra</h2>
    <table class="uk-table table3 uk-table-middle uk-text-center uk-margin-remove uk-table-hover">
        <tbody>
        <?php
        $cars = array
        (
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'live' => '89',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'live' => '12',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'live' => '89',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'live' => '12',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'live' => '89',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'live' => '12',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'live' => '89',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'live' => '12',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'live' => '89',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'live' => '12',
            ),
        );
        foreach ($cars as $k => $v) { ?>
        <tr>
            <td><a href="#"><img src="<?= $v['giaidau'] ?>" alt=""></a></td>
            <td><a href="#"><img src="<?= $v['doi1'] ?>" alt=""></a></td>
            <td>
                <div class="uk-position-relative">
                    <div class="tyso1">
                        <?= $v['tyso'] ?>
                    </div>
                    <div class="live1"><i class="fa fa-circle uk-text-middle" aria-hidden="true"></i> Phút <?= $v['live'] ?></div>
                    <div class="uk-invisible uk-position-center box9">
                        <a href="#" class="uk-button uk-button-primary">XEM</a>
                        <a href="#" class="uk-button uk-button-default">Cá cược</a>
                    </div>
                </div>
            </td>
            <td><a href="#"><img src="<?= $v['doi2'] ?>" alt=""></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <h2 class="title_tb" style="color: #d4d4d4">Trận đấu đã diễn ra</h2>
    <table class="uk-table table3 uk-table-middle uk-text-center uk-margin-remove uk-table-hover">
        <tbody>
        <?php
        $cars = array
        (
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/champions.png',
                'doi1' => 'imgs/doibong/db-arsenal.png',
                'doi2' => 'imgs/doibong/db-chelsea.png',
                'tyso' => '2 - 0',
                'time' => '20:00 19-05',
            ),
            array(
                'giaidau' => 'imgs/giaidau/laliga.png',
                'doi1' => 'imgs/doibong/db-barcelona.png',
                'doi2' => 'imgs/doibong/db-slavia.png',
                'tyso' => '0 - 1',
                'time' => '20:00 19-05',
            ),
        );
        foreach ($cars as $k => $v) { ?>
            <tr>
                <td><a href="#"><img src="<?= $v['giaidau'] ?>" alt=""></a></td>
                <td><a href="#"><img src="<?= $v['doi1'] ?>" alt=""></a></td>
                <td>
                    <div class="uk-position-relative">
                        <div class="tyso1">
                            <?= $v['tyso'] ?>
                        </div>
                        <div class="live1"><?= $v['time'] ?></div>
                        <div class="uk-invisible uk-position-center box9">
                            <a href="#" class="uk-button uk-button-primary">Highlight</a>
                        </div>
                    </div>
                </td>
                <td><a href="#"><img src="<?= $v['doi2'] ?>" alt=""></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<a class="uk-button uk-button-default btn2 uk-invisible"><img src="imgs/arrow1.png" alt=""></a>
