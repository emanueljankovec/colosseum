<?php
/**
 * Template Name: Book Page
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

$objectTodayTime = new DateTime('NOW');
$todayTimeFormated = $objectTodayTime->format('Y-m-d');

$nextYearTodayTime = $objectTodayTime->add(new DateInterval('P1Y'));
$nextYearTodayTimeFormated = $nextYearTodayTime->format('Y-m-d');


$api_url = 'https://api.teamup.com/ksf2qekf55mph37dxj/events?startDate=' . $todayTimeFormated . '&endDate=' . $nextYearTodayTimeFormated;

if(get_transient('full-calendar-api-response') != false) {
	$response = get_transient('full-calendar-api-response');
} else {
	$response = wp_remote_get( $api_url ,
		array( 
			'timeout' => 10,
			'headers' => array( 
				'Teamup-Token' => '63dafbe407a76372cd6c3d340e890178ee108904945614eb8533ee3f526bc62b',
			) 
		)
	);
	set_transient('full-calendar-api-response', $response['body'], 3600);
	$response = $response['body'];
}

$response = json_decode($response);

$fullCalendarEvents = [];
foreach($response->events as $responseItem) {
	$fullCalendarEvent = new stdClass();
	$responseItemStart = date('Y-m-d', strtotime($responseItem->start_dt));
	$responseItemEnd = date('Y-m-d', strtotime($responseItem->end_dt));

	$fullCalendarEvent->title = 'Rezervisano';
	$fullCalendarEvent->start = $responseItemStart;
	$fullCalendarEvent->end = $responseItemEnd;
	
	$fullCalendarEvents[] = $fullCalendarEvent;


}

$fullCalendarEvents = json_encode($fullCalendarEvents);

?>


<div class="wrapper" id="colosseum_calendar">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="colosseum_calendar_message">Rezervišite brzo i jednostavno.</div>

					<div class="colosseum_calendar_title">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z"/></svg>
						Kalendar
					</div>
					
                    <div id='calendar'></div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

	<div class="modal fade" id="calendar_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Za zakazivanje kontaktirajte nas putem:</h5>
					<div type="button" class="close" data-dismiss="modal" aria-label="Close"></div>
				</div>
				<div class="modal-body">
					<div class="contact_instagram">
						<a href="https://www.instagram.com/colosseum_bend_official/" target="_blank">
							<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_instagram.png' ?>" alt="Instagram">
							@colosseum_bend_official
						</a>
					</div>
					<div class="contact_phone">
						<a href="tel:00381691333422"><img src="<?= get_stylesheet_directory_uri() . '/assets/icons/phone.svg' ?>" alt="Phone"> <span>+381 69 133 34 22</span></a>
					</div>
					<div class="contacnt_mail">
						<a href="mailto:colosseumbendnis@gmail.com" target="_blank">
							<img src="<?= get_stylesheet_directory_uri() . '/assets/icons/cb_mail.png' ?>" alt="Mail">
							colosseumbendnis@gmail.com
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
?>
<script>

	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			contentHeight: "auto",
			firstDay: 1,
			views: {
				dayGrid: {
				// options apply to dayGridMonth, dayGridWeek, and dayGridDay views
				},
				timeGrid: {
				// options apply to timeGridWeek and timeGridDay views
				},
				week: {
				// options apply to dayGridWeek and timeGridWeek views
				},
				day: {
				// options apply to dayGridDay and timeGridDay views
				}
			},
			events: <?php echo $fullCalendarEvents; ?>,
			locale: "sr-ME",
			eventColor: '#E71D36',
		});
		calendar.setOption('contentHeight', 550);
		calendar.render();
		// calendar.changeView('timeGridWeek');
	});

</script>