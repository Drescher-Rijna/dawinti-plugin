<?php
/**
 * Da Winti class.
 *
 * @category   Class
 * @package    ElementorDawinti
 * @subpackage WordPress
 * @author     Drescher Rijna & Veli Aday
 * @copyright  2021 Drescher Rijna & Veli Aday
 * @since      1.0.0
 * php version 7.3.9
 */

namespace ElementorDawinti\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();

/**
 * Awesomesauce widget class.
 *
 * @since 1.0.0
 */
class Dawinti extends Widget_Base {

	/**
	 * Class constructor.
	 *
	 * @param array $data Widget data.
	 * @param array $args Widget arguments.
	 */
	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );

		wp_register_style( 'dawintiformcss', plugins_url( '/assets/css/dawinti-form.css', ELEMENTOR_DAWINTI ), array(), '1.0.0' );
	}

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Da Winti Form';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Da Winti Form', 'elementor-dawinti' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-wpforms';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'general' );
	}


	/**
	 * Enqueue styles & scripts.
	 */
	 public function get_style_depends() {
		return array('dawintiformcss');
	}




	

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', 'Da Winti Form' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mail_to',
			[
				'label' => __( 'Hvem skal modtage mailen', 'Da Winti Form' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'eksempel@gmail.com', 'Da Winti Form' ),
				'placeholder' => __( 'eksempel@gmail.com', 'Da Winti Form' ),
			]
		);

		$this->end_controls_section();
		
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
			$settings = $this->get_settings_for_display();
		?>
			
			<div id='dawinti-booking-form-container'>
			    <div id='dawinti-booking-form-container-sub'>
                    <h2 id='dawinti-booking-form-title'>
                    Bookingforespørgsel
                    </h2>
                    <h3 id='dawinti-booking-form-subtitle'>
                    Send en forespørgsel på en begivenhed eller arrangement.
                    </h3>
					<p id="notice-dawinti"><u>Bemærk:</u> Send helst besked 5 til 7 dage inden begivenheden skal finde sted </p>
                    <form action="" id='dawinti-booking-form' method='POST' >
                        <div id='dawinti-booking-form-begivenhed'>
                            <label>
                            Begivenhed
                            </label>
							<select name='dawinti_event_type' required>
								<option value="" disabled selected>Vælg venligst...</option>
								<option value="begravelse">Begravelse</option>
								<option value="bryllup">Bryllup</option>
								<option value="business møde">Business møde</option>
								<option value="fest">Fest</option>
								<option value="fødselsdag">Fødselsdag</option>
								<option value="gæsteudstilling">Gæsteudstilling</option>
								<option value="jubilæum">Jubilæum</option>
								<option value="koncert">Koncert</option>
								<option value="konfirmation">Konfirmation</option>
								<option value="andet">Andet</option>
							<select>
                        </div>
                            
                        <div id='dawinti-booking-form-dato'>
                            <label>
                            Vælg dato
                            </label>
							
                            <input id="dawinti-event-date" name='dawinti_event_date' type='date' required />
                        </div>
                            
                        <div id='dawinti-booking-form-personer'>
                            <label>
                            Antal Personer
                            </label>
                            <input name='dawinti_people_amount' type='number' placeholder='Antal personer' />
                        </div>
                            
                        <div id='dawinti-booking-form-navn'>
                            <label>
                            Dit navn
                            </label>
                            <input name='dawinti_sender_name' type='text' placeholder='Dit navn' required  />
                        </div>
                            
                        <div id='dawinti-booking-form-nummer'>
                            <label>
                            Telefon
                            </label>
                            <input name='dawinti_phone_number' type='number' placeholder='+45 5678XXXX' />
                        </div>
                            
                        <div id='dawinti-booking-form-email'>
                            <label>
                            E-mail
                            </label>
                            <input id="dawinti-email" name='dawinti_sender_mail' type='text' placeholder='eksempel@gmail.com' required  />
                        </div>

                        <div id='dawinti-booking-form-besked'>
                            <label>
                            Din besked
                            </label>
                            <textarea id="dawinti-besked" name='dawinti_message' placeholder='Skriv en besked...' required></textarea>
                        </div>

						<button type='submit' name='dawintisubmit' id='dawinti-booking-form-btn'>Send forespørgelse</button>
                    </form>
				</div>
				<div id="tak-for-besked">
						<h3> Tak for din besked. Vi vil svare tibage hurtigst muligt </h3>
				</div>

				<script>
						document.getElementById("dawinti-booking-form-btn").addEventListener("click", mailSend);

						function mailSend() {

							var besked = document.getElementById('dawinti-besked').value;
							var email = document.getElementById('dawinti-email').value;

							if(besked != '' && email != '') {
								document.getElementById('dawinti-booking-form-btn').style.display = "none";
								document.getElementById('tak-for-besked').style.display = "block";
							}
							
						}

						//BRUGEREN SKAL IKKE KUNNE SENDE EN FORESPØRGSEL OM ET EVENT TIDLIGERE END EN UGE PÅ FORHÅND
						var dtToday = new Date();
							
						var month = dtToday.getMonth() + 1;
						var day = dtToday.getDate();
						var year = dtToday.getFullYear();

							if(month < 10) {
								month = '0' + month.toString();
							}
								
							if(day < 10) {
								day = '0' + day.toString();
							}
								
							
						var minDate = year + '-' + month + '-' + day;
						document.getElementById('dawinti-event-date').setAttribute('min', minDate);
				</script>
			</div>

				<!-- FUNKTION DER SENDER MAIL -->
				<?php

					$to = strval($settings['mail_to']);

					if(isset($_POST['dawintisubmit']) && $_POST['dawinti_sender_mail'] != '' ) {
							
	
							$sendevent = $_POST['dawinti_event_type'];
							$senddate = $_POST['dawinti_event_date'];
							$sendnumofpeople = $_POST['dawinti_people_amount'];
							$sendername = $_POST['dawinti_sender_name'];
							$sendernumber = $_POST['dawinti_phone_number'];
							$sendfrom = $_POST['dawinti_sender_mail'];
							$sendmess = $_POST['dawinti_message'];
							
		
							$body = "";
		
							$body .= "Fra: " . $sendername . "\r\n";
							$body .= "Begivenhed: " . $sendevent . "\r\n";
							$body .= "Dato: " . $senddate . "\r\n";
							$body .= "Antal deltagere: " . $sendnumofpeople . "\r\n";
							$body .= "Besked: " . $sendmess . "\r\n";
							$body .= "Email: " . $sendfrom . "\r\n";
							$body .= "Nummer: " . $sendernumber . "\r\n";
							
							wp_mail($to, $sendevent, $body);	

							header("Location: https://dawinti.drescher-rijna.dk/arrangementer/");
    						exit;

					}
				
				?>
				

				<?php

	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>


		<?php
	} 
}


