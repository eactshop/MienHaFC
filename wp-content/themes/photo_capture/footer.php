<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photo_capture
 */

?>
<?php 
$ttd = get_field('thong_tin_doi');
$ttll = get_field('thong_tin_lien_lac');
$link = get_field('link');
?>
<div class="footer-area v4 v2 v4_gradient">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4">
				<div class="single-footer">
					<div class="footerlogo">
						<div class="footer_logo v2">
							<a href="#"><img src="assets/img/logo_icon.png" alt=""><?php
if (!empty($ttd)):
    foreach ($ttd as $tt):
    ?>
		               <?php echo $tt['name'] ?>
		                <?php
endforeach;
endif;
?>
</a>
						</div>
						<p>Don't give up! <br>Come on, you can do it!</p>
						<div class="footer-social">
							<ul>
								<li><a class="" href="<?php echo $link['link_1'] ?>"><i class="fab fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4">
				<div class="single-footer">
					<h5>Pages</h5>
					<div class="footer-menu">
						<ul>
						<li><a href="#home">Trang chủ</a></li>
						<li><a href="#features">Thông tin</a></li>
						<li><a href="#myClub">Số dư</a></li>
						<li><a href="#myClub">Thành viên</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4">
				<div class="single-footer">
					<h5>Contact</h5>
					<div class="footer-menu">
						<ul>
							<li><a href="mailto:<?php echo $ttll['email']?>"><?php echo $ttll['email']?></a></li>
							<li><a href="tel:<?php echo $ttll['phone']?>"><?php echo $ttll['phone']?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 text-center">
				<div class="footer-r">
					<p>© Bản quyền thuộc về TTA</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>