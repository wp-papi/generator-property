<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Property <%= propertyName %>
 *
 * @version 1.0.0
 */
class Papi_Property_<%= propertyName %> extends Papi_Property {

	/**
	 * The default value.
	 *
	 * @var int
	 * @since 1.0.0
	 */
	public $default_value = '';
	/**
	 * Get default settings.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public function get_default_settings() {
		return array();
	}

  /**
   * Generate the HTML for the property.
   *
   * @since 1.0.0
   */

  public function html () {
    // Property options
    $options = $this->get_options();

    // Database value.
    $value = $this->get_value();
    ?>
    <input type="text" value="<?php echo $value; ?>" name="<?php echo $options->slug; ?>"/>
    <?php
  }

  /**
   * Format the value of the property before we output it to the application.
   *
   * @param mixed $value
   * @param int $post_id
   *
   * @since 1.0.0
   *
   * @return mixed
   */

   // This function is not required since it does this in the base class.

   // public function format_value ($value, $post_id) {
   //  return $value;
   // }

   /**
    * Update the value of the property before we save it to the database.
    *
    * @param mixed $value
    * @param int $post_id
    *
    * @since 1.0.0
    *
    * @return mixed
    */

    // This function is not required since it does this in the base class.

    // public function update_value ($value, $post_id) {
    //  return $value;
    // }
}
