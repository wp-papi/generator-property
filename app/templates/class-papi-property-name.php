<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Property <%= propertyName.replace('_', ' ') %>
 */

class Papi_Property_<%= propertyName %> extends Papi_Property {

	/**
	 * The convert type.
	 *
	 * @var string
	 */
	// This function is not required since it does this in the base class.
	//
	// public $convert_type = 'string';

	/**
	 * The default value.
	 *
	 * @var null
	 */
	// This function is not required since it does this in the base class.
	//
	// public $default_value = '';

	/**
	 * Get default settings.
	 *
	 * @return array
	 */
	// This function is not required since it does this in the base class.
	//
	// public function get_default_settings() {
	//	return [];
	// }

	/**
	 * Generate the HTML for the property.
	 */
	public function html() {
		// Database value.
		$value = $this->get_value();
		?>
			<input type="text" value="<?php echo $value; ?>" name="<?php echo $this->html_name(); ?>"/>
		<?php
	}

	/**
	 * Change value after it's loaded from the database.
	 *
	 * @param mixed $value
	 * @param string $slug
	 * @param int $post_id
	 *
	 * @return mixed
	 */
	// This function is not required since it does this in the base class.
	//
	// public function load_value ($value, $slug, $post_id) {
	//	return maybe_unserialize( $value );
	// }

	/**
	 * Format the value of the property before we output it to the application.
	 *
	 * @param mixed $value
	 * @param string $slug
	 * @param int $post_id
	 *
	 * @return mixed
	 */
	// This function is not required since it does this in the base class.
	//
	// public function format_value ($value, $slug, $post_id) {
	//	return maybe_unserialize( $value );
	// }

	/**
	 * Import value to the property.
	 *
	 * @param  mixed  $value
	 * @param  string $slug
	 * @param  int    $post_id
	 *
	 * @return mixed
	 */
	// This function is not required since it does this in the base class.
	//
	// public function import_value( $value, $slug, $post_id ) {
	//	return maybe_unserialize( $value );
	// }

	/**
	 * Update the value of the property before we save it to the database.
	 *
	 * @param mixed $value
	 * @param string $slug
	 * @param int $post_id
	 *
	 * @return mixed
	 */
	// This function is not required since it does this in the base class.
	//
	// public function update_value ($value, $slug, $post_id) {
	//	return maybe_unserialize( $value );
	// }
}
