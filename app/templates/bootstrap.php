<?php

/*
 * Plugin Name: Papi: Property <%= propertyName %>
 * Description: <%= description %>
 * Version: 1.0.0
 * Author: <%= author %>
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Include Property <%= propertyName %>.
 *
 * @since 1.0.0
 */

function include_property_<%= propertyName . toLowerCase() %> () {
  include_once('class-papi-property-<%= propertyName . toLowerCase() %>.php');
}

add_action('papi_include_properties', 'include_property_<%= propertyName . toLowerCase() %>');
