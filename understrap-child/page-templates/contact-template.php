<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$questions = ['5 + 5', '4 + 4', '3 + 3'];
$answers = [10, 8, 6];
$random_question_key = array_rand($questions);
$form_succsess = false;
if(isset($_POST['answer-key'])) {
	if($_POST['answer'] == $answers[$_POST['answer-key']]) {
		$form_succsess = true;
	}
}

?>

<!-- 
	TO DO LIST
	Validacija na frontu za formmu, za input polja

-->

<div class="wrapper" id="colosseum_contact_holder">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="colosseum_contact_main_holder">
						<div class="contact_title">
							Kontaktirajte nas.
							<span>Neka vaše veselje bude onako kako vi želite.</span>
							<div class="colosseum_contact_phone">
								<a href="tel:00381691333422">Telefon: <span>+381 69 133 34 22</span></a>
							</div>
						</div>
						<?php if($form_succsess == false) : ?>
							<form action="" method="post" class="colosseum_form">
								<div class="colosseum_contact_form">
									<div class="form_name_holder">
										<div class="conctact_form_name_holder">
											<span>Ime</span>
											<input type="text" name="first-name" id="name_input">
										</div>
										<div class="conctact_form_lastname_holder">
											<span>Prezime</span>
											<input type="text" name="last-name" id="last_name_input">
										</div>
									</div>
									<div class="conctact_form_email_holder">
										<span>Email</span>
										<input type="email" name="email-adress" id="email_input">
									</div>
									<div class="concat_form_message_holder">
										<span>Vaša poruka</span>
										<textarea name="message" id="message_input" cols="30" rows="10"></textarea>
									</div>
									<div class="colosseum_form_question">
										<div class="colosseum_form_question_title">Potvrda identiteta:</div>
										<div class="colosseum_form_question_holder">
											Pitanje: <?= $questions[$random_question_key]; ?> = 
											<input type="text" name="answer">
											<input type="hidden" name="answer-key" value="<?= $random_question_key; ?>">
										</div>
									</div>
									<button type="submit" class="colosseum_form_submit_btn">Pošalji</button>
								</div>
							</form>
						<?php else : ?>
							<div>Poslato</div>
							<?php 
								$email_body = "Ime: " . $_POST['first-name'] . "\nPrezime: " . $_POST['last-name'] . "\nEmail: " . $_POST['email-adress'] . "\nPoruka: " . $_POST['message'];
								wp_mail("ejankovec@gmail.com", 'Kontakt forma', $email_body);
								$form_succsess = false;
								$_POST = [];
							?>
						<?php endif; ?>
						<div class="colosseum_form_bottom_part">
							"Želim da Vam poželim sva slavlja srećnim i veselim i da sa nama proslavite ne samo jedno, već mnogo budućih slavlja. Uživajte. <span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FF9100" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg></span>"
							<div>Anastazija Mitrovic</div>
						</div>
					</div>
					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<!-- TO prevent form resubmision on page refresh -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- TO prevent form resubmision on page refresh -->

<?php
get_footer();
