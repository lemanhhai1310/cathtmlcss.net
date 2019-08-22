<?php $title = "Video" ?>
<?php $post = "" ?>
<?php include "header.php"; ?>
<?php include "block-4.php"; ?>
<?php include "block-ads.php"; ?>
<div class="tv-block-post">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-default uk-padding-small tv-card1">
                    <h1 class="video-title">Đình chiến thương mại đẩy TQ khỏi ngôi vị 'công xưởng thế giới'</h1>
                    <article>
                        <p>Cuộc gặp giữa Tổng thống Mỹ Donald Trump và Chủ tịch Trung Quốc Tập Cận Bình hôm 29/6 được xem là tín hiệu tốt trong bối cảnh chiến tranh thương mại giữa hai nước đang gia tăng căng thẳng, làm xáo trộn nền kinh tế toàn cầu.</p>
                        <p>Thuế quan sẽ không tăng, ít nhất là trong tương lai gần, và Mỹ sẽ nới lỏng các lệnh trừng phạt đối với Huawei, tập đoàn đa quốc gia thành công nhất của Trung Quốc.</p>
                        <p>Tuy nhiên, hiệp định đình chiến giữa Mỹ và Trung Quốc đạt được có thể dẫn tới một sự thay đổi lớn về trật tự kinh tế toàn cầu, trong đó vai trò của Trung Quốc như “công xưởng của thế giới” vốn tồn tại lâu nay sẽ dần suy yếu.</p>
                        <figure class="uk-text-center">
                            <img src="https://znews-photo.zadn.vn/w1024/Uploaded/ohunaaa/2019_06_30/my_trung_1.jpg"
                                 alt="">
                            <figcaption class="uk-margin-small">Tổng thống Trump và Chủ tịch Trung Quốc Tập Cận Bình tại cuộc gặp hôm 29/6 ở Osaka, Nhật Bản. Ảnh: New York Times.</figcaption>
                        </figure>
                        <p>Tại thời điểm này, ngay cả một thỏa thuận đình chiến mong manh cũng có tác động đáng kể. Mỹ sẽ giữ nguyên mức thuế đối với hàng hóa Trung Quốc trong nhiều tháng hoặc có thể nhiều năm tới. Theo đó, các công ty đa quốc gia có khả năng sẽ tiếp tục chuyển ít nhất là các giai đoạn cuối cùng của chuỗi cung ứng ra khỏi Trung Quốc.</p>
                        <p>Theo ông Jacques deLisle, Giám đốc Trung tâm nghiên cứu Trung Quốc đương đại tại Đại học Pennsylvania (Mỹ), “những nguy cơ hiện vẫn còn đó và việc vận hành các chuỗi cung ứng dài như vậy chứa đựng quá nhiều rủi ro. Các doanh nghiệp không thích sự bất ổn và chính điều này lại kéo dài yếu tố bất ổn của thị trường”.</p>
                        <p>Về vấn đề này, kết quả cuộc đàm phán ở Osaka cũng tương tự như cuộc gặp giữa ông Trump và ông Tập tại Buenos Aires vào ngày 1/12/2018 đưa tới hiệp định “đình chiến” mà theo đó Mỹ giữ nguyên mức thuế đã tăng đối với hàng hóa Trung Quốc.</p>
                    </article>
                    <div class="uk-text-right">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                    <hr>
                    <h2 class="video-title">Bình luận</h2>
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-colorscheme="dark" data-numposts="5"></div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div uk-sticky="offset: 70">
                    <h1 class="video-title">Các bài viết khác</h1>
                    <ul class="uk-nav uk-nav-default">
                        <?php
                        $data = array(
                            array(
                                'title' => 'Hướng dẫn nạp coin',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá trên TV',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá không bị giật lag',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách soi tỉ lệ kèo hay nhất',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá trên TV',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá không bị giật lag',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Hướng dẫn nạp coin',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá trên TV',
                                'href' => '',
                                'active' => false,
                            ),
                            array(
                                'title' => 'Cách xem bóng đá không bị giật lag',
                                'href' => '',
                                'active' => true,
                            ),
                        );
                        foreach ($data as $k1 => $v1){?>
                            <li><a href="#"><?= $v1['title'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>