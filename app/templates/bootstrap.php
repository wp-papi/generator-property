<?php

/*
 * Plugin Name: Papi: Property <%= propertyName.replace('_', ' ') %>
 * Description: <%= description %>
 * Version: 1.0.0
 * Author: <%= author %>
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Include Property <%= propertyName.replace('_', ' ') %>.
 */

add_action( 'papi/include', function () {
  require_once 'class-papi-property-<%= propertyName.toLowerCase().replace('_', '-') %>.php';
} );
