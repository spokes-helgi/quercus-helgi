<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>
<div class="section fp-auto-height" id="section6">
<!-- <div class="container-fluid section fp-auto-height"> -->
	<div class="row footer-1 justify-content-center align-items-center" style="margin: 0 !important;">
		<div class="col-12 col-lg-7  text-center">
			<h1 style="color: white;">SIGN UP FOR OUR NEWSLETTER</h1>
		</div>
		<div class="col-12 col-lg-5 email-fromular" style="background: #e34327; height: 100%; display: flex; justify-content: center; align-items: center;">
			<form action="//quercus-group.us12.list-manage.com/subscribe/post?u=d4e1033e48223a1d98877184e&amp;id=9e35117674" method="post" name="mc-embedded-subscribe-form" id="qr-subscribe" class="validate form-inline col-12" target="_blank" novalidate>
			  <div class="form-group col-xs-12 col-md-9">
			    <input style="border-radius: 0;" type="email" value="" placeholder="EMAIL" name="EMAIL" class="form-control col-12">
			  </div>
			  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d4e1033e48223a1d98877184e_9e35117674" tabindex="-1" value=""></div>
			  	<div class="form-group col-xs-12 col-md-3">
			  		<button type="submit" style="background-color: #1e2022; color: white" class="btn col-12">Submit</button>
		  		</div>
			</form>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			
		</div>
	</div>
	<div class="row footer-2 justify-content-center align-items-center" style="margin: 0 !important;">
		<div class="widgets col-12">
			<div class="row">
				<?php dynamic_sidebar( 'qr_widget_one' ); ?>
				<?php dynamic_sidebar( 'qr_widget_two' ); ?>
				<?php dynamic_sidebar( 'qr_widget_three' ); ?>
				<?php dynamic_sidebar( 'qr_widget_four' ); ?>
			</div>
		</div>
	</div>
	<div class="row footer-3 justify-content-center align-items-center" style="margin: 0 !important;">
		<div class="widgets col-12">
            <div class="row">
                <div class="col-12 col-md-3 proud-member-felt"><h2>PROUD MEMBER OF</h2></div>
				<?php dynamic_sidebar( 'qr_widget_member_one' ); ?>
				<?php dynamic_sidebar( 'qr_widget_member_two' ); ?>
				<?php dynamic_sidebar( 'qr_widget_member_tree' ); ?>
            </div>
		</div>
	</div>
	<div class="row footer-4 justify-content-center align-items-center" style="margin: 0 !important;">
		<p>@<?php echo date('Y');?> Quercus Group - All Rights Reserved</p>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->
<div class="case-modal-window">
	<div class="modal-container">
		<!-- Left side (picture) -->
		<div class="modal-left"></div>
		<!-- Right side (text block) -->
		<div class="modal-right">
			<!-- Vertically centered content -->
			<div class="modal-content">
				<h3 class="case-title"></h3>
				<div class="modal-close">X</div>
				<div class="modal-text"></div>
				<p class="modal-credit"></p>
			</div> 
		</div>
	</div>
</div>
<div class="employee-modal-window">
	<div class="modal-employee-container">
		<div class="employee-image-container" style="width: 320px;">
            <span class="modal-employee-close">X</span>
            <img class="employee-image" src="" />
		</div>
		<h3 class="employee-name"></h3>
		<div class="modal-text"></div>
		<p class="employee-title"></p>
		<p class="employee-email"></p>
		<p class="employee-phone"></p>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>