<?php
/**
 * ComplimentTuesday extension hooks
 *
 * @file
 * @ingroup Extensions
 * @license GPL-2.0+
 */
class ComplimentTuesdayHooks {
	/**
	 * Conditionally register the unit testing module for the ext.complimentTuesday module
	 * only if that module is loaded
	 *
	 * @param array $testModules The array of registered test modules
	 * @param ResourceLoader $resourceLoader The reference to the resource loader
	 * @return true
	 */
	public static function onResourceLoaderTestModules( array &$testModules, ResourceLoader &$resourceLoader ) {
		$testModules['qunit']['ext.complimentTuesday.tests'] = [
			'scripts' => [
				'tests/ComplimentTuesday.test.js'
			],
			'dependencies' => [
				'ext.complimentTuesday'
			],
			'localBasePath' => __DIR__,
			'remoteExtPath' => 'ComplimentTuesday',
		];
		return true;
	}
}
