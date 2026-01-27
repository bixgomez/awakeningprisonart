<?php
/**
 * Environment-Specific WordPress Configuration
 *
 * Copy this file to /web/wp-config-env.php on each server and fill in
 * the appropriate values. This file is gitignored and should never be
 * committed to version control.
 *
 * @package awakeningprisonart
 */

/**
 * Environment Identifier
 * Useful for conditional logic elsewhere in the site.
 * Values: 'development', 'staging', 'production'
 */
define( 'WP_ENVIRONMENT_TYPE', 'production' );

/**
 * Database Settings
 */
define( 'DB_NAME', 'your_database_name' );
define( 'DB_USER', 'your_database_user' );
define( 'DB_PASSWORD', 'your_database_password' );
define( 'DB_HOST', 'localhost' );

/**
 * Site URL Settings
 */
define( 'WP_HOME', 'https://yourdomain.com' );
define( 'WP_SITEURL', WP_HOME );

/**
 * Authentication Unique Keys and Salts.
 *
 * Generate fresh values at: https://api.wordpress.org/secret-key/1.1/salt/
 * Each environment should have unique salts!
 */
define( 'AUTH_KEY',         'generate-unique-key-here' );
define( 'SECURE_AUTH_KEY',  'generate-unique-key-here' );
define( 'LOGGED_IN_KEY',    'generate-unique-key-here' );
define( 'NONCE_KEY',        'generate-unique-key-here' );
define( 'AUTH_SALT',        'generate-unique-key-here' );
define( 'SECURE_AUTH_SALT', 'generate-unique-key-here' );
define( 'LOGGED_IN_SALT',   'generate-unique-key-here' );
define( 'NONCE_SALT',       'generate-unique-key-here' );

/**
 * Database Table Prefix
 * Change this if you have multiple WordPress installations in one database.
 */
$table_prefix = 'wp_';

/**
 * Debug Settings
 *
 * For production: All should be false.
 * For development/staging: Enable as needed.
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/**
 * Security Settings
 */
// Disable file editing in admin (recommended for production).
define( 'DISALLOW_FILE_EDIT', true );

// Force SSL for admin area.
define( 'FORCE_SSL_ADMIN', true );

/**
 * Performance Settings (optional)
 */
// define( 'WP_CACHE', true );

/**
 * Memory Limits (optional - uncomment if needed)
 */
// define( 'WP_MEMORY_LIMIT', '256M' );
// define( 'WP_MAX_MEMORY_LIMIT', '512M' );
