<?php
/*
 * QuickResponse Extension for MediaWiki.
 *
 * @license MIT License
 */

class QuickResponseHooks {
	/**
	 * @param OutputPage $out
	 */
	public static function onBeforePageDisplay( OutputPage $out ) {
		$out->addModules( 'ext.QuickResponse' );
	}
}
