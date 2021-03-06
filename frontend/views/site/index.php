<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
use common\models\Slider;
use common\models\Chairmans;
use common\models\Sectors;
use yii\bootstrap\ActiveForm;
?>
<div class="kc_clfw"></div>
<section class="kc-elm kc-css-217831 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-846361 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Main Slider-->
                    <div id="banner">
                        <section class="main-slider">
                            <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >


                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- Third Slide -->
                                    <?php
                                    $sliders = Slider::find()->where(['status' => '1'])->all();
                                    foreach ($sliders as $slide) {
                                        ?>

                                        <div class="item <?= $slide->active_status == '1' ? 'active' : '' ?>">

                                            <!-- Slide Background -->
                                            <img src="<?= Yii::$app->homeUrl . 'uploads/sliders/' . $slide->id . '/image.' . $slide->image; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                                            <div class="bs-slider-overlay"></div>

                                            <div class="container">
                                                <div class="row">
                                                    <!-- Slide Text Layer -->
                                                    <?php if (!empty($slide->title)) { ?>
                                                        <div class="slide-text slide_style_right">
                                                            <h1 data-animation="animated zoomInLeft"><?= $slide->title ?></h1>
                                                            <!--<p data-animation="animated fadeInLeft">Shape your business with the help </p>-->
                                                            <!--<a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>-->
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <!-- End of Slide -->


                                </div><!-- End of Wrapper For Slides -->

                                <!-- Left Control -->
                                <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <!-- Right Control -->
                                <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </section>
                    </div>
                    <!--End Main Slider-->
                    <div class="header-lower index">

                        <div class="auto-container">
                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button id="mobile-menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <?= MenuHeaderWidget::widget() ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-919334 kc_row index-chairmansmsg">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-102672 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Call To Action-->
                    <section class="call-to-action" style="background-image: url('images/1.jpg')">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Column-->
                                <?php $chairmans = Chairmans::findOne(1); ?>
                                <div class="column col-md-8 col-sm-12 col-xs-12 pr100">
                                    <h2 class="text-left"><?= $chairmans->title ?></h2>
                                    <div class="text text-justify">
                                        <p><?= $chairmans->short_content ?> </p>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-12 col-xs-12 pr100 mt25">
                                    <a style="float: left;" href="<?= yii::$app->homeUrl . 'site/chairmans-message' ?>" class="theme-btn btn-style-three">Chairman's Message</a>
                                </div>
                                <!--Btn Column-->
                            </div>
                        </div>
                    </section>
                    <!--End Call To Action-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-92621 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-104665 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Services Section-->
                    <section class="services-section">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Sectors We Serve</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Services Block-->
                                <?php
                                $sectors = Sectors::find()->where(['status' => 1])->all();
                                foreach ($sectors as $sector) {
                                    ?>
                                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box hvr-float">
                                            <div class="image">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/sectors/' . $sector->id . '/small/image.' . $sector->small_image; ?>" class="attachment-equlibrium_370x218 size-equlibrium_370x218 wp-post-image" alt="" srcset="<?= Yii::$app->homeUrl . 'uploads/sectors/' . $sector->id . '/small/image.' . $sector->small_image; ?>" />
                                                <div class="icon-box">
                                                    <span class="icon flaticon-spray-gas-bottle"></span>
                                                </div>
                                                <div class="overlay-box clearfix">
                                                    <div class="text"><?= substr($sector->main_content, 0, 80) ?>..</div>
                                                    <a href="<?= Yii::$app->homeUrl . 'site/sectors?sector=' . $sector->canonical_name . '#' . $sector->canonical_name; ?>" class="read-more">Read More</a>
                                                </div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="<?= Yii::$app->homeUrl . 'site/sectors?sector=' . $sector->canonical_name . '#' . $sector->canonical_name; ?>"><?= $sector->name ?> </a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!--Services Block-->

                            </div>
                        </div>
                    </section>
                    <!--End Services Section-->

                </div>
            </div>
        </div>
    </div>
</section>

<section class="kc-elm kc-css-784631 kc_row">
    <div class="company-profile">
        <div class="kc-col-container">
            <!--Call To Action-->
            <section class="call-to-action">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="sec-title">
                                <h2>EQUILIBRIUM</h2>
                            </div>
                            <p>
                                " EEC aspires to be recognized as a distinct, distinguished and globally competitive provider of Engineering Consultancy, Program Management, Project Management services, and Advisory Support for engineering organizations in the Oil & Gas, and Energy sector. "
                            </p>
                            <a target="_blank" download="" href="pdf/EqecProfile.pdf" class="theme-btn btn-style-three">Download Electronic Profile</a>
                        </div>
                        <!--Btn Column-->
                    </div>
                </div>
            </section>
            <!--End Call To Action-->
        </div>
    </div>
</section>

<section class="kc-elm kc-css-784631 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-809007 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--About Section-->
                    <section class="about-section grey-bg">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Who we are</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="text">
                                        <?= strlen($about_content->who_we_are_index) > 303 ? substr($about_content->who_we_are_index, 0, 300) . '...' : $about_content->who_we_are_index ?>
                                        <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?></div>
                                    <div class="image">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/about/who_we_are_image.<?= $about_content->who_we_are_image ?>" alt="who_we_are" />
                                    </div>
                                </div>
                                <!--Blocks Column-->
                                <div class="blocks-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="row clearfix">
                                        <!--About Block-->
                                        <div class="about-block col-md-6 col-sm-6 col-xs-6">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href=""> <img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_mission_image.<?= $about_content->our_mission_image ?>" alt="our_mission"/></a>
                                                </div>
                                                <div class="lower-box">
                                                    <h3><a href="#">Our Mission</a></h3>
                                                    <div class="text">
                                                        <?= strlen($about_content->our_mission) > 133 ? substr($about_content->our_mission, 0, 130) . '...' : $about_content->our_mission ?>
                                                        <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--About Block-->
                                        <div class="about-block col-md-6 col-sm-6 col-xs-6">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href=""><img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_vision_image.<?= $about_content->our_vision_image ?>" alt="our_vision"/></a>
                                                </div>
                                                <div class="lower-box">
                                                    <h3><a href="#">Our Vision</a></h3>
                                                    <div class="text">
                                                        <?= strlen($about_content->our_vision) > 133 ? substr($about_content->our_vision, 0, 130) . '...' : $about_content->our_vision ?>
                                                        <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End About Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-989604 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-396994 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Work Section-->
                    <section class="work-section">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Work Process</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-loupe"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">1</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">DISCOVER</a></h3>
                                            <div class="text">People with ideas and experience to develop a vision for the future</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-settings-2"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">2</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">BUILD</a></h3>
                                            <div class="text">The right tools at the right time enhances the shard economy</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-new-message-envelope"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">3</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">CONNECT</a></h3>
                                            <div class="text">Intgrating clients with partners is the focus of everyday business</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-telemarketer"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">4</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">LAUNCH</a></h3>
                                            <div class="text">People with ideas and experience to develop a vision for the future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Work Section-->

                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-671882 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-753762 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Subscribe Section-->
                    <section class="subscribe-section">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="title-column col-md-6 col-sm-6 col-xs-12">
                                    <h2>For More Company Details</h2>
                                    <div class="text">Submit  your email address here</div>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <div class="subscribe-form">
                                        <form method="post" id="subscribe-mail-3">
                                            <div class="form-group">
                                                <input type="hidden" id="" name="" value="">
                                                <input id="subscribe_email-3" type="email" name="email" value="" placeholder="Your email address" required>
                                                <button type="submit" name="subscribe" class="theme-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End subscribe Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-564083 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-95614 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Contact Info Section-->
                    <section class="contact-info-section">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-map-marker"></span>
                                        </div>
                                        <div class="text">
                                            <?= $contact_info->address ?>
                                        </div>
                                    </div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-volume-control-phone"></span>
                                        </div>
                                        <div class="text"><span><?= $contact_info->phone ?></span>Mon-Fri, 9am until 6pm</div>
                                    </div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-envelope-o"></span>
                                        </div>
                                        <div class="text"><span><?= $contact_info->email ?></span>We reply within 24 hours</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Contact Info Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-690201 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-981488 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Contact Map Section-->
                    <section class="contact-map-section">

                        <!--Map Outer-->
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas"
                                 data-zoom="16"
                                 data-lat="24.4916943"
                                 data-lng="54.3694248"
                                 data-type="roadmap"
                                 data-hue="#ffc400"
                                 data-title="EQUILIBRIUM ENGINEERING CONSULTANCY"
                                 data-icon-path="<?= Yii::$app->homeUrl ?>images/map-marker.png"
                                 data-content="7 5 A St , Equilibrium Engineering Consultancy, Abu Dhabi, United Arab Emirates<br><a href='mailto:info@eqec.ae'>info@eqec.ae</a>">
                            </div>
                        </div>

                        <div class="auto-container clearfix">
                            <div class="form-outer">
                                <div class="inner-box">
                                    <h2>Get in Touch</h2>
                                    <br>

                                    <!-- Default Form -->
                                    <div class="default-form">
                                        <div role="form" class="wpcf7" id="wpcf7-f284-p285-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <?php
                                            $form = ActiveForm::begin(['id' => 'contact-form', 'options' => [
                                                            'class' => 'form-theme'
                                            ]]);
                                            ?>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap text-165"><input type="text" name="ContactForm[name]" value="" size="40" class="wpcf7-form-control wpcf7-text " required="" aria-required="true" aria-invalid="false" placeholder="Name" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap email-857"><input type="email" name="ContactForm[email]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap text-165"><input type="text" name="ContactForm[phone]" value="" size="40" class="wpcf7-form-control wpcf7-text " required="" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap email-857"><input type="text" name="ContactForm[subject]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" aria-required="true" aria-invalid="false" placeholder="Subject" /></span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap textarea-59"><textarea name="ContactForm[message]" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Massage"></textarea></span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pad0">
                                                        <div id="recaptcha" class="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LeqjF0UAAAAAP4bdtEuNVjfWrrDAnTrCQObEh13"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pad0">
                                                        <?= Html::submitButton('Send Now', ['class' => 'wpcf7-form-control wpcf7-Subscribe theme-btn btn-style-one', 'name' => 'Submit']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            <?php ActiveForm::end(); ?>
                                        </div>
                                    </div>
                                    <!--End Default Form -->
                                </div>
                            </div>
                        </div>

                    </section>
                    <!--End Contact Map Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<script>
    jQuery(document).ready(function () {
        jQuery('#contact-form').on('submit', function (e) {
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                e.preventDefault();
                if (jQuery("#recaptcha").next(".validation").length == 0) // only add if not added
                {
                    jQuery("#recaptcha").after("<div class='validation' style='color:#c54040;position: absolute;top: 55px;font-size: 12px;'>Please verify that you are not a robot</div>");
                }
            }
        });
    });
</script>
<script>
    jQuery(document).ready(function () {
        jQuery('#subscribe-mail-3').on('submit', function (e) {
            e.preventDefault();
            var email = $('#subscribe_email-3').val();
            jQuery.ajax({
                type: 'POST',
                cache: false,
                async: false,
                data: {email: email},
                url: '<?= Yii::$app->homeUrl; ?>site/subscribe-mail',
                success: function (data) {
                    $('#subscribe_email-3').val('');
                }
            });
        });


    }
    });

</script>
