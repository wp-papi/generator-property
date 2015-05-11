<?php

/*
 * Plugin Name: Papi: Property <%= propertyName %>
 * Description: <%= description %>
 * Version: 1.0.0
 * Author: <%= author %>
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Include Property <%= propertyName %>.
 *
 * @since 1.0.0
 */

add_action('papi/include', function () {
  require_once 'class-papi-property-<%= propertyName.toLowerCase() %>.php';
});
