<footer id="ai-footer">
    <div class="top uk-section-xsmall">
        <div class="uk-container">
            <figure class="uk-text-center logo1 uk-margin">
                <a href="#"><img data-srcset="images/logo.png, images/logo.webp, images/logo.svg" alt="" uk-img></a>
            </figure>
            <div class="uk-child-width-1-3@m uk-margin uk-grid-small uk-flex-middle" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/footer/icon_mail.png',
                        'title' => 'Email',
                        'content' => 'contact@theailab.io',
                    ),
                    array(
                        'src' => 'images/footer/ico_phone.png',
                        'title' => 'Telephone',
                        'content' => '+110 111 053 123',
                    ),
                    array(
                        'src' => 'images/footer/ico_address.png',
                        'title' => 'Address',
                        'content' => '250 Hartford Avenue, Bellingham MA 2019',
                    ),
                );
                foreach ($data as $k => $v):?>
                <div>
                    <div class="box1_f uk-flex uk-flex-middle">
                        <img src="<?= $v['src'] ?>" alt="">
                        <span>
                            <span><?= $v['title'] ?></span>
                            <strong><?= $v['content'] ?></strong>
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="uk-text-center box2_f">
                <h3 class="uk-margin-small">Not following us yet?</h3>
                <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
                <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="pinterest"></a>
                <a href="" class="uk-icon-button" uk-icon="youtube"></a>
            </div>
        </div>
    </div>
    <div class="bottom uk-text-center">
        <div class="uk-container">
            2019 © All Rights theailab.io
        </div>
    </div>
</footer>
</section>
</body>
</html>