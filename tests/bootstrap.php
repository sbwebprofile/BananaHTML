<?php
/**
 * @package   BananaHTML
 * @author    Nazar Mokrynskyi <nazar@mokrynskyi.com>
 * @copyright Copyright (c) 2015, Nazar Mokrynskyi
 * @license   MIT License, see license.txt
 */
require_once __DIR__.'/../src/nazarpc/BananaHTML.php';
class h extends nazarpc\BananaHTML {
	protected static function form_csrf () {
		return static::input(
			[
				'name'  => 'secret',
				'type'  => 'hidden',
				'value' => 'CSRF token'
			]
		);
	}
}
