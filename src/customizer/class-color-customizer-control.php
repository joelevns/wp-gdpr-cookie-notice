<?php
/**
 * Leaves_And_Love\WP_GDPR_Cookie_Notice\Customizer\Color_Customizer_Control class
 *
 * @package WP_GDPR_Cookie_Notice
 * @since 1.0.0
 */

namespace Leaves_And_Love\WP_GDPR_Cookie_Notice\Customizer;

use WP_Customize_Manager;
use WP_Customize_Control;
use WP_Customize_Color_Control;

/**
 * Class representing a color Customizer control.
 *
 * @since 1.0.0
 */
class Color_Customizer_Control extends Abstract_Customizer_Control {

	/**
	 * Maps the control to a core `WP_Customize_Control` instance to register.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer instance where the control should be registered.
	 * @return WP_Customize_Control Customize control to register in WordPress core.
	 */
	public function map( WP_Customize_Manager $wp_customize ) : WP_Customize_Control {
		$args = $this->map_args( $this->args );

		return new WP_Customize_Color_Control( $wp_customize, $this->id, $args );
	}
}
