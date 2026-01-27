<?php
/**
 * Environment-Specific WordPress Configuration
 *
 * SETUP INSTRUCTIONS:
 * 1. Copy this file to wp-config-env.php on your server
 * 2. Fill in all placeholder values below
 * 3. Generate fresh salts at: https://api.wordpress.org/secret-key/1.1/salt/
 *
 * This file is for non-DDEV environments (Linux dev server, Linode production, etc.)
 *
 * @package awakeningprisonart
 */

/**
 * Environment Identifier
 * Values: 'development', 'staging', 'production'
 */
define( 'WP_ENVIRONMENT_TYPE', 'production' );

/**
 * Database Settings
 */
define( 'DB_NAME', 'DATABASE_NAME_HERE' );
define( 'DB_USER', 'DATABASE_USER_HERE' );
define( 'DB_PASSWORD', 'DATABASE_PASSWORD_HERE' );
define( 'DB_HOST', 'localhost' );

/**
 * Site URL Settings
 */
define( 'WP_HOME', 'https://YOUR_DOMAIN_HERE' );
define( 'WP_SITEURL', WP_HOME );

/**
 * Authentication Unique Keys and Salts.
 *
 * Generate fresh values at: https://api.wordpress.org/secret-key/1.1/salt/
 * Copy and paste the generated code below, replacing these placeholders.
 */
define( 'AUTH_KEY',         'GENERATE_NEW_SALT' );
define( 'SECURE_AUTH_KEY',  'GENERATE_NEW_SALT' );
define( 'LOGGED_IN_KEY',    'GENERATE_NEW_SALT' );
define( 'NONCE_KEY',        'GENERATE_NEW_SALT' );
define( 'AUTH_SALT',        'GENERATE_NEW_SALT' );
define( 'SECURE_AUTH_SALT', 'GENERATE_NEW_SALT' );
define( 'LOGGED_IN_SALT',   'GENERATE_NEW_SALT' );
define( 'NONCE_SALT',       'GENERATE_NEW_SALT' );

/**
 * Database Table Prefix
 */
$table_prefix = 'wp_';

/**
 * Debug Settings
 *
 * Production: All should be false.
 * Development/Staging: Enable as needed for troubleshooting.
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/**
 * Security Settings
 */
define( 'DISALLOW_FILE_EDIT', true );
define( 'FORCE_SSL_ADMIN', true );
