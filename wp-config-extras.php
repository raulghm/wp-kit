<?php

// Setting a Default Theme for New WordPress Installations With WP_DEFAULT_THEME
define( 'WP_DEFAULT_THEME', 'roots' );
// Disabling WordPress' Automatic Update Feature With AUTOMATIC_UPDATER_DISABLED
define( 'AUTOMATIC_UPDATER_DISABLED', true );
// Letting WordPress Skip the wp-content Directory While Updating With CORE_UPGRADE_SKIP_NEW_BUNDLED
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
// Allowing Unfiltered WordPress Uploads for Administrators With ALLOW_UNFILTERED_UPLOADS
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define('WP_ENV', 'development');