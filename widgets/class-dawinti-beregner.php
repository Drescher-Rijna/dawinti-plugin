<?php
/**
 * Da Winti class.
 *
 * @category   Class
 * @package    ElementorDawinti
 * @subpackage WordPress
 * @author     Drescher Rijna & Veli Aday
 * @copyright  2021 Drescher Rijna & Veli Aday
 * @since      1.1.0
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
 * @since 1.1.0
 */
class Dawinti_Beregner extends Widget_Base {

	/**
	 * Class constructor.
	 *
	 * @param array $data Widget data.
	 * @param array $args Widget arguments.
	 */
	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );

		wp_register_style( 'beregnercss', plugins_url( '/assets/css/beregner.css', ELEMENTOR_DAWINTI ), array(), 'all' );
        wp_register_script( 'beregnerjs', plugins_url( '/assets/js/beregner.js', ELEMENTOR_DAWINTI ), array(), 'all' );

		
	}
	

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Da Winti Beregner';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Da Winti Beregner', 'elementor-dawinti' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-calculator';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.1.0
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
		return array('beregnercss');
	}

	/**
	 * Enqueue styles.
	 */
	 public function get_script_depends() {
		return array('beregnerjs');
	}
	

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function render() {
			$settings = $this->get_settings_for_display();
		?>
			<div id="dawinti-form-container">
            <!-- Valg af rum -->
            <div class="dawinti-selector">
                <h3>
                    Hvor vil du/i overnatte?
                </h3>
                <select id="select-rum">
                    <option selected value="rum-1">Suite til h??jre (max 4.pers)</option>
                    <option value="rum-2">Suite til venstre (max 6.pers)</option>
                    <option value="rum-3">1. sal dobbeltv??relset (max 2.pers)</option>
                    <option value="rum-4">1. sal familiev??relset (max 4.pers)</option>
                </select>
            </div>

            <!-- Formen for beregneren som ??ndre sig alt efter hvilket rum man v??lger foroven -->
            <form id="dawinti-beregner-form">
                <div id="antal-personer-total">
                    <h3>
                        Hvor mange er i (i alt)?
                    </h3>
                    <!-- Valg af hvor mange personer der overnatter i alt -->
                    <select id="antal-personer" required>
                        <option selected value="400" >2. personer</option>
                        <option value="500" >3. personer</option>
                        <option value="600" >4. personer</option>
                    </select>
                </div>
                

                <!-- Valg af hvor mange b??rn der er med s?? beregningen tager hensyn til at b??rn betaler halvpris -->
                <div id="valg-antal-children">
                    <h3>
                        Hvor mange af jer er b??rn op til 13 ??r?
                    </h3>
                    <p>B??rn op til 13 ??r betaler halvpris.</p>
                    <select id="antal-children">
                        <option selected value="0">Ingen</option>
                        <option value="1" >1. barn</option>
                        <option value="2" >2. b??rn</option>
                        <option value="3">3. b??rn</option>
                        <option value="4">4. b??rn</option>
                    </select>
                </div>

                <!-- Valg af overnatning periode som skal omregnes i JS -->
                <div id="antal-dage-container">
                    <div id="dage-container">
                        <h3>
                            Hvor mange d??gn vil du/i overnatte?
                        </h3>
                        <label class="antal-dage-label">
                            Antal d??gn
                        </label>
                        <!-- Hvor skriver antal d??gn man vil overnatte -->
                        <input placeholder="0" type="number" id="dage-input" required/>
                    </div>
                </div>
                
                <br/>
                <button type="submit">
                    beregn
                </button>
            </form>
            <div id="error-message-container">
                <p id="error-message">

                </p>
            </div>
            

            <!-- Hvor den totale pris vil blive fremvist -->
            <div id="total-pris-container">
                <p id="total-pris">
                    Pris:
                </p>
            </div>
        </div>
				
				
				<?php

	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _content_template() {} 
}


