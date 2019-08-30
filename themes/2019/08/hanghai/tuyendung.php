<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Tuyển dụng' ?>
<?php require "header.php"; ?>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">tuyển dụng</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="box_2 uk-margin">
            <h4 class="title uk-margin-remove">Tuyển dụng</h4>
        </div>
        <?php for ($i=0;$i<=3;$i++): ?>
        <div class="uk-card uk-card-body uk-margin-small tuyendung uk-card-default uk-padding-small uk-box-shadow-medium">
            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img src="images/icon_tuyendung.png" alt="">
                </div>
                <div class="uk-width-expand">
                    <h3 class="title"><a href="tuyendung-detail.php">Tuyển dụng HLV thuyền viên</a></h3>
                    <div class="desc">Công ty TNHH Hải Dương cần tuyển GẤP các chức danh cho tàu Dịch Vụ Dầu Khí. Yêu cầu: Tốt nghiệp Đại học, Cao đẳng chính quy.</div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<?php require "footer.php"; ?>