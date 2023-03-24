<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photo_capture
 */

get_header();
?>

<?php
$thanhVien = get_field('thanh_vien');
$logo = get_field('logo');
$ttd = get_field('thong_tin_doi');
$ef = get_field('effect');
$link = get_field('link');
$imgif = get_field('image_information');
$soDu = get_field('so_du');
$qr = get_field('qr');
?>

<!--:::::welcome area start:::::::-->
<div class="welcome-area v4" id="home" style="padding-bottom: 0;">
    <div class="container">
        <div class="main_area">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-text">
                <?php
if (!empty($ttd)):
    foreach ($ttd as $tt):
    ?>
		               <h1><?php echo $tt['name'] ?><br></h1>
		               <p><?php echo $tt['mo_ta'] ?><br><?php echo $tt['mo_ta_1'] ?></p>
		                <?php
endforeach;
endif;
?>

                    </div>
                    <div class="space-30"></div>
                    <div class="app-btns v4">
                        <a href="<?php echo $link['link_1'] ?>" class="app-btn align-self-center">
                            <span class="app-btn-icon">
                                <i class="fab fa-facebook"></i>
                            </span>
                            <span class="app-btn-text">
                                <small>Follow me<strong>Facebooks</strong></small>
                            </span>
                        </a>
                        <a href="<?php echo $link['link_2'] ?>" class="app-btn active align-self-center">
                            <span class="app-btn-icon">
                                <i class="fab fa-instagram"></i>
                            </span>
                            <span class="app-btn-text">
                                <small>Follow me <strong>Instagram</strong></small>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="welcome_right v5_2" data-tilt>
    <img src="<?php echo $logo ?>" alt="">
</div>
<!-- <div class="welcome_right v5_3" data-tilt>
    <img src="" alt="">
</div> -->
<div class="effect_1">
    <img src="<?php echo $ef['effect_1'] ?>" alt="">
</div>
<div class="effect_2">
    <img src="<?php echo $ef['effect_1'] ?>" alt="">
</div>
<div class="effect_3">
    <img src="<?php echo $ef['effect_3'] ?>" alt="">
</div>
<div class="effect_4">
    <img src="<?php echo $ef['effect_1'] ?>" alt="">
</div>
<div class="effect_5">
    <img src="<?php echo $ef['effect_1'] ?>" alt="">
</div>
<!--:::::welcome area end:::::::-->



<!--:::::future area start:::::::-->
<div class="future-area v4 section-padding" id="features" style="padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading wow fadeIn" data-wow-delay=".3s" data-wow-duration="2s">
                    <h1>Thông tin đội bóng</h1>
                </div>
                <div class="space-45"></div>

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="single-future active" data-toggle="pill" href="#tab1" role="tab">
                        <strong>Thông tin cơ bản</strong>
                        <small>Tên đội: <?php echo $tt['name'] ?><br> Năm thành lập: 2023<br>Quê quán: Nam Định</small>
                    </a>
                    <a class="single-future" data-toggle="pill" href="#tab2" role="tab">
                        <strong>Lịch sinh hoạt</strong>
                        <small>1-2 trận/tuần <br>Nhậu thường niên</small>
                    </a>
                    <a class="single-future" data-toggle="pill" href="#tab3" role="tab">
                        <strong>Thành tích</strong>
                        <small>Hiện chưa có thành tích<br></small>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 text-center" style="display: flex;
            align-items: center;">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="future-mobile1">
                            <img src="<?php echo $imgif['image_1'] ?>" alt="phone">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="future-mobile1">
                            <img src="<?php echo $imgif['image_2'] ?>" alt="phone">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="future-mobile1">
                            <img src="<?php echo $imgif['image_3'] ?>" alt="phone">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--:::::future area end:::::::-->

<!--:::::progress bar area start:::::::-->

<!--:::::progress bar area end:::::::-->


<!--:::::service area start:::::::-->
<div class="service-area v4" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 m-auto text-center">
                <div class="heading heading2">
                    <h1>Thành viên của<span> <br> FC Xa Quê</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="row">
                <?php
if (!empty($thanhVien)):
    foreach ($thanhVien as $tv):
    ?>
		            <div class="col-12 col-md-4">
		                <div class="single-service mb-30">
		                    <img src="<?php echo $tv['image']; ?>" alt="">
		                    <strong>Họ tên : <?php echo $tv['name']; ?></strong>
		                    <small>SĐT : <?php echo $tv['sdt']; ?></small> <br>
		                    <small>Số dư : <?php echo $tv['so_du']; ?></small>
		                </div>
		            </div>
		                <?php
endforeach;
endif;
?>

        </div>
    </div>
</div>
<!--:::::service area end:::::::-->

<div class="banking" id="bank" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
    <h1>Bank ghi rõ nội dung <br>Tên + nộp quỹ đợt...</h1>
    <img class="img_qr" src="<?php echo $qr; ?>" alt="">
</div>
<div class="progress-area v4 section-padding" id="myClub" style="padding-top: 0;">
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Số Dư Quỹ</h1>
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="single_counter">
                    <div class="tien" style="display: flex; justify-content: center;">
                        <h1 class="counter" data-count="<?php echo $soDu['tien'] ?>">0</h1>
                        <h1><?php echo $soDu['don_vi'] ?></h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
