<?php

/*
 * Plugin Name: Page Type Builder: Property <%= propertyName %>
 * Description: <%= description %>
 * Version: 1.0.0
 * Author: <%= author %>
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Reigster Property <%= propertyName %> to Page Type Builder.
 *
 * @since 1.0.0
 */

function include_property_<%= propertyName.toLowerCase() %> () {
  include_once('class-property-<%= propertyName.toLowerCase() %>.php');
}

add_action('ptb/include_property_types', 'include_property_<%= propertyName.toLowerCase() %>');