<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<?php perch_content('Hero'); ?>
<div class="container main-container">
	<main class="main wrapper">

		<div class="row">
			<?php perch_content('Contact Form'); ?>
			<div class="contact-text">
				<?php perch_content('Intro'); ?>
				<?php perch_content('Social media'); ?>
			</div>
		</div>

		<div class="row">
			<div class='embed-container'>
				<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.02483822554!2d-2.593924632907829!3d51.45770039911076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718e7636bf9e77%3A0x3ff15070b1b2a7b6!2sWhitefriars%2C+Lewins+Mead%2C+Avon%2C+Bristol+BS1+2NT!5e0!3m2!1sen!2suk!4v1487941958638' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
			</div>
		</div>

	</main>
</div>
<?php perch_layout('global.footer'); ?>
</body>
</html>