<?php declare(strict_types=1);

namespace App;

/**
 * Warning: Never update this file directly, always update config.local.php in data folder!
 *
 * You can override any constant from this file if you want.
 */
class DefaultConfig
{
	const FOLDER_DATA = __DIR__;

	const DEVELOPMENT_IPS = [
		'12.34.56.78',
	];

	/** @var ?string Put your email if you want to receive emails about errors and exceptions. See https://tracy.nette.org/guide for more info. null to disable */
	const TRACY_DEBUGGER_EMAIL = null;  // null to disable
	// const TRACY_DEBUGGER_EMAIL = 'admin@your-domain.com';
}
