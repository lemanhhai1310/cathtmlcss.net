<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Tin Tức' ?>
<?php require "header.php"; ?>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">Tin tức</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="box_2 uk-margin">
            <h4 class="title uk-margin-remove">Tin tức</h4>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-20 uk-margin" uk-grid="masonry: true">
            <?php
            $data = array(
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/SXovhynfkZYtrC2_rgA-2XuPlJMIw_Rfo0C0EzT7QuU/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/08/4759607_cover_macos_mojave_10-14-6_tinhte.jpg',
                    'title' => 'Apple phát hành bản cập nhật macOS Mojave 10.14.6: Sửa một số lỗi quan trọng',
                    'desc' => 'Đây là bản cập nhật chính thức cho macOS Mojave - 10.14.6, thường thì các bản update trên Mac anh em nên quan tâm để cập nhật vì nó luôn được sửa lỗi và ổn định hơn iOS.',
                ),
                array(
                    'src' => 'https://genknews.genkcdn.vn/zoom/222_289/2019/8/26/ussupertankerduringthecarmelforestfiresinisrael-156680951613027357304-crop-15668097887491516962714.jpg',
                    'title' => 'Supertanker, kỳ quan độc nhất của ngành cứu hỏa đang nỗ lực cứu lấy rừng Amazon',
                    'desc' => 'Sinh vật hoang dã sống trong rừng mưa nhiệt đới tại Brazil có thể ngước lên trời cao, nhìn thấy tấm áo choàng đỏ phấp phới trong gió và khẳng định: "Supertanker đang tới cứu chúng ta".',
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/pwivovlb/2019_08_25/u.jpg',
                    'title' => 'Bà Nguyễn Bích Quy vụ Gateway bị khởi tố',
                    'desc' => 'Cơ quan điều tra khởi tố bà Nguyễn Bích Quy để làm rõ vụ nam học sinh 6 tuổi trường Gateway tử vong trước khi được đưa vào bệnh viện.',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/7rVIbKL6B1kofBa4taGkxm5c3kJbbDsG3fflSBYIlsM/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/08/4759508_cover_Note10_iPhoneXs.jpg',
                    'title' => 'Lý do rất khó khăn khi chuyển từ iPhone sang điện thoại Android làm máy chính',
                    'desc' => 'Năm nay mình thực sự rất ấn tượng khi Samsung ra mắt bộ đôi Note 10/Note 10+, đặc biệt là Note 10. Sau mấy năm dùng iOS mình đã cảm thấy nhàm chán và cũng có ý muốn thay đổi khi có thể mua được Note…',
                ),
                array(
                    'src' => 'https://genknews.genkcdn.vn/zoom/470_289/2019/8/27/ios-12-features2-2-15668450539911828874351-crop-15668452691572039503078.jpg',
                    'title' => 'GlobalFoundries kiện TSMC vi phạm bằng sáng chế của mình, Apple và hàng loạt ông lớn có nguy cơ bị cấm nhập khẩu vào Mỹ',
                    'desc' => 'Nếu tòa án đứng về phía GlobalFoundries trong vụ kiện TSMC, đây sẽ là một cơn địa chấn mới đối với các hãng công nghệ khi sản phẩm của nhiều hãng tên tuổi sẽ bị cấm nhập khẩu vào Mỹ.',
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/lce_cqdjw/2019_08_27/NQH00359_1_thumb.jpg',
                    'title' => 'Việt Nam - Malaysia thúc đẩy hợp tác an ninh, hàng hải trên Biển Đông',
                    'desc' => 'Tại họp báo trưa 26/8, Thủ tướng Nguyễn Xuân Phúc và Thủ tướng Malaysia Mahathir Mohamad đánh giá cao quan hệ song phương và đồng thuận trên nhiều lĩnh vực giữa hai nước.',
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/ovhpaob/2019_08_27/45902051f64e1110485f.jpg',
                    'title' => 'Tổng bí thư: \'Vào Trung ương không phải để cho oai hay kiếm chác\'',
                    'desc' => 'Gửi gắm, nhắn nhủ gần 400 đảng viên trẻ, Tổng bí thư, Chủ tịch nước Nguyễn Phú Trọng hy vọng trong số này sẽ có người vào Trung ương nhưng không phải vào cho oai hay để kiếm chác.',
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/jgtnrz/2019_08_27/Thiep_Vua_Thai_20.jpg',
                    'title' => 'Hình ảnh Hoàng quý phi Thái lái máy bay, bắn súng gây bão mạng',
                    'desc' => 'Văn phòng Hoàng gia Thái mới công bố những hình ảnh hiếm của Hoàng quý phi được nhà vua sắc phong hồi tháng 7. Trang mạng của văn phòng sau đó sập vì có quá nhiều người truy cập.',
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/Uploaded/lerl/2019_08_26/2856_1.jpg',
                    'title' => 'DÂN MIỀN TÂY NGÓNG LŨ NHƯ \'TRỜI HẠN TRÔNG MƯA\'',
                    'desc' => 'Ở miền Bắc, lũ xuất hiện thường gây thiệt hại trăm bề nhưng với người dân miền Tây, lũ về là niềm vui của bà con. Nhờ đó họ mới có cá, tôm từ sông Mekong để đánh bắt mưu sinh.',
                ),
            );
            foreach ($data as $k => $v):?>
            <div>
                <div>
                    <img class="uk-width-1-1" data-src="<?= $v['src'] ?>" alt="">
                    <h3 class="title_1 uk-margin-small"><a href="news-detail.php"><?= $v['title'] ?></a></h3>
                    <div class="uk-margin-small desc-news"><?= $v['desc'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-section-xsmall block_03">
            <ul class="uk-pagination uk-flex-center uk-grid-10" uk-margin>
                <li class="uk-active"><span>01</span></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
            </ul>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>