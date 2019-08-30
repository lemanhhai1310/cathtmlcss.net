<?php $data['title'] = 'Memusic - Bài hát chi tiết' ?>
<?php require "header.php"; ?>
<?php require "player-bottom.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Bài hát</h3>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index box_stt">
                <div class="uk-padding-small">
                    <div class="uk-padding-small uk-margin uk-card uk-card-default uk-box-shadow-medium uk-border-rounded">
                        <div class="uk-grid uk-grid-small uk-grid-match uk-grid-20" uk-grid>
                            <div class="uk-width-1-5@m">
                                <div class="uk-cover-container uk-border-rounded">
                                    <img data-src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/2/b/5/f/2b5fc1e170114f1fa1acd3c19daa915d.jpg" alt="" class="uk-cover" uk-cover>
                                    <canvas width="960" height="960"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-flex uk-flex-column">
                                    <div class="uk-flex-auto info_baihat">
                                        <h3 class="title">Độ Ta Không Độ Nàng (Cover)</h3>
                                        <div class="author">Hương Ly</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                    </div>
                                    <div>
                                        <div class="uk-grid uk-child-width-auto uk-grid-small uk-grid-10 uk-flex-middle" uk-grid>
                                            <div>
                                                <div class="uk-grid uk-grid-small uk-grid-10 uk-child-width-auto" uk-grid>
                                                    <div>
                                                        <a href="" class="uk-icon-button btn_01" uk-icon="icon: heart; ratio: 0.8"></a>
                                                    </div>
                                                    <div>
                                                        <a href="" class="uk-icon-button btn_01" uk-icon="icon: social; ratio: 0.8"></a>
                                                    </div>
                                                    <div>
                                                        <a href="" class="uk-icon-button btn_01" uk-icon="icon: download; ratio: 0.8"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-2-3@m">
                            <div class="loi_bai_hat uk-margin">
                                <h3 class="title">Lời bài hát</h3>
                                <article>
                                    Bước xuống phố xung quanh mình <br>
                                    Thấy bao nhiêu đôi nhân tình <br>
                                    Chẳng nhớ đã bao lâu rồi <br>
                                    Bước cô đơn hoài lặng thinh <br>
                                    Cứ cắm cúi TV rồi smart phone <br>
                                    Luôn luôn bên mình <br>
                                    Rồi tự cảm thấy Ok vì bạn bè đầy đứa ế <br>

                                    Muốn quen một ai,muốn yêu 1 ai (sao cứ e ngại).. <br>
                                    Sợ lúc xa rời nhau nỗi đau khó phôi phai (ố ô ô ồ) <br>
                                </article>
                            </div>
                            <div class="uk-margin">
                                <h2 class="title-baihat-1">Bình luận <small>(21 bình luận)</small></h2>
                                <div class="uk-grid uk-grid-small uk-grid-20" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img data-src="images/users/hailm.jpg" alt="" class="uk-cover" uk-cover>
                                            <canvas width="45" height="45"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <form>
                                            <fieldset class="uk-fieldset">


                                                <div class="uk-margin">
                                                    <textarea class="uk-textarea" rows="3" placeholder=""></textarea>
                                                </div>
                                                <div class="uk-text-right">
                                                    <button type="submit" class="uk-button btn-binhluan uk-button-default">Bình luận</button>
                                                </div>


                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'https://scontent.fhan3-2.fna.fbcdn.net/v/t1.0-1/p50x50/62083085_102257734377464_6728650354671484928_n.jpg?_nc_cat=103&_nc_oc=AQnw_JZJZSHF_BKdb1uyHN5Qo3seHJ5aSb6bLEIAu-F63Yw8VMGvatyxeRknvQDvKrs&_nc_ht=scontent.fhan3-2.fna&oh=f2446d75e84a141b63c74aca48c012ba&oe=5DD5EA86',
                                        'name' => 'Linh Lina‎',
                                        'desc' => 'Có ai biết cách xử lí đoạn chuyển động này không ạ? Chỉ giúp mình với ạ. Cả ngày nay ngồi mà không ra ạ. Em mới học mong mọi người chỉ bảo ạ',
                                    ),
                                    array(
                                        'src' => 'https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-1/p50x50/65690710_892406697775786_351122681778667520_n.jpg?_nc_cat=105&_nc_oc=AQmzOrBkXatLunXGK2aa9BS6kiwuHnLRxYy5pA48GYRo7XPK1tyb598YhN6o842zzz8&_nc_ht=scontent.fhan4-1.fna&oh=8a274b31b476e4da368819f281a9bd6a&oe=5DC98F7A',
                                        'name' => 'Nguyễn Sophie‎',
                                        'desc' => 'mọi người cho em hỏi. Em có sửa lại cv, Mọi người thấy ổn không ạ. em cảm ơn',
                                    ),
                                    array(
                                        'src' => 'https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-1/p56x56/68613574_158612058652699_6951916975354281984_n.jpg?_nc_cat=108&_nc_oc=AQlSIQv9IlB-Dzfih-9FM5duqURG1ohTLBnqvv-3xcaSVIQMmikTjEEH1zJX30Uc09w&_nc_ht=scontent.fhan4-1.fna&oh=d51f02741bcfdc31ba15f62341db72ae&oe=5E133C06',
                                        'name' => 'Việt Lê',
                                        'desc' => 'Dẹp hết đi. Ghi đơn giản skill set là liệt kê ra thôi. Đừng có trình bày theo kiểu liệt kê ra skill rồi cho điểm. Hay liệt kê như trên. Chắc chắn ở đây em pv fresher thì chả có cái quái gì để mà showup đâu. Con nếu đã tự tin thì pv luôn junior nhé.',
                                    ),
                                    array(
                                        'src' => 'https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-1/p50x50/42629082_1723661841075514_4310796900480581632_n.jpg?_nc_cat=102&_nc_oc=AQlR7WDIz-JW-WAjlknQ4rPtQb57akfO1FO9c3imH9y0EiAK0BBgk2blsSENJxUkf64&_nc_ht=scontent.fhan3-1.fna&oh=9b8947a9a751a85193c11ee2ceefd31c&oe=5DC76511',
                                        'name' => 'Nguyễn Mạnh Hưng',
                                        'desc' => 'Những thằng như thế mốt kô có kết cục tốt đâu 🤣',
                                    ),
                                );
                                foreach ($data as $k => $v):?>
                                <div class="uk-grid uk-grid-small uk-grid-20" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                                            <canvas width="45" height="45"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-grid" uk-grid>
                                            <div class="uk-width-4-5@m">
                                                <h6 class="uk-margin-remove-bottom title_user_bl"><?= $v['name'] ?> <small>một giờ trước</small></h6>
                                                <div><?= $v['desc'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="uk-grid uk-grid-small uk-grid-20" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img data-src="" alt="" class="uk-cover" uk-cover>
                                            <canvas width="45" height="45"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-grid" uk-grid>
                                            <div class="uk-width-4-5@m">
                                                <button class="uk-button btn-xemthem uk-button-default uk-width-1-1">Xem thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <h2 class="title-baihat-1">Xem thêm</h2>
                                <div class="uk-grid" uk-grid>
                                    <div class="uk-width-4-5@m">
                                        <ul class="uk-list">
                                            <?php
                                            $data = array(
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/08/21/8/4/c/3/1566395536535.jpg',
                                                    'title' => 'Gia Đình',
                                                ),
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/08/23/7/6/5/0/1566543410373.jpg',
                                                    'title' => 'Ai Là Người Thương Em',
                                                ),
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/08/18/4/3/5/e/1566139681246.jpg',
                                                    'title' => 'Có Tất Cả Nhưng Thiếu Anh',
                                                ),
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/05/30/b/4/0/7/1559222246341.jpg',
                                                    'title' => 'Em Đừng Như Thế',
                                                ),
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/06/07/a/0/6/8/1559876092601.jpg',
                                                    'title' => 'Ngôi Sao Của Anh',
                                                ),
                                                array(
                                                    'src' => 'https://avatar-nct.nixcdn.com/song/2019/08/24/d/b/4/2/1566636272362.jpg',
                                                    'title' => 'Chẳng Cần Lý Do (Tropical Remix)',
                                                ),
                                            );
                                            foreach ($data as $k => $v):?>
                                                <li class="uk-margin">
                                                    <div class="uk-grid-small uk-grid" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-rounded">
                                                                <img data-src="<?= $v['src'] ?>" alt="" uk-cover>
                                                                <canvas width="55" height="55"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="box_1 uk-padding-remove">
                                                                <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title"><?= $v['title'] ?></a></h6>
                                                                <div class="author"><a href="#author">Quân A.P</a></div>
                                                                <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-1-3">
                                                            <div class="uk-child-width-auto uk-flex-between uk-grid" uk-grid>
                                                                <div>04:50</div>
                                                                <div>
                                                                    <a href="#" class="uk-link-reset"><span uk-icon="more"></span></a>
                                                                    <div class="uk-dropdown uk-padding-remove list-more-acts" uk-dropdown="mode: click; pos: bottom-right">
                                                                        <ul class="uk-list uk-padding-remove">
                                                                            <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: plus; ratio:0.8;"></span> Thêm vào</a></li>
                                                                            <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: social; ratio:0.8;"></span> Chia sẻ</a></li>
                                                                            <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: download; ratio:0.8;"></span> Tải xuống</a></li>
                                                                            <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: ban; ratio:0.8;"></span> Chặn</a></li>
                                                                            <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: warning; ratio:0.8;"></span> Thông tin</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <?php require "sidebar-ads.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>