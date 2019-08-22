<?php $title = "Tài khoản" ?>
<?php $acc = "" ?>
<?php include "header.php"; ?>
<?php include "block-4.php"; ?>
<?php include "block-ads.php"; ?>
<div class="tv-block-2 uk-padding-remove">
    <div class="uk-container uk-margin tv-container1">
        <div class="uk-margin">
            <div class="uk-grid-collapse box4 uk-grid tv-boxx" uk-grid="" uk-alert="">
                <div class="uk-width-auto uk-first-column">
                    <h2 class="title_tb uk-text-uppercase">thông báo</h2>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-height-1-1 box1">
                        <div class="uk-margin-remove uk-padding-remove uk-alert">
                            <a class="uk-alert-close box2 uk-height-1-1 uk-icon uk-close" uk-close=""><img src="imgs/close.png" alt=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></a>
                            <marquee onmouseover="this.stop();" onmouseout="this.start();">
                                <span class="uk-margin-right"><i class="fa fa-circle uk-text-middle" aria-hidden="true"></i> Tổng thống Trump ký sắc lệnh tuyên bố tình trạng khẩn cấp, cấm các nhà mạng Mỹ dùng thiết bị Huawei <a href="#">Tham gia tại đây</a></span>
                                <span class="uk-margin-right"><i class="fa fa-circle uk-text-middle" aria-hidden="true"></i> Hoc HTML tai VietJack - Vi du cach su dung the marquee. <a href="#">Tham gia tại đây</a></span>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container tv-container1 uk-section-xsmall">
        <h2 class="tran-title uk-text-uppercase uk-text-center uk-margin-medium uk-margin-top">tài khoản</h2>
        <div class="grid-acc-1" uk-grid>
            <div class="uk-width-1-4@m">

            </div>
            <div class="uk-width-expand">
                <?php include "infoacc-right.php"; ?>
                <?php include "coinacc-right.php"; ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>