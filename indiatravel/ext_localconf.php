<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dropesoft.' . $_EXTKEY,
	'Frontendindia',
	array(
		'Locality' => 'list, show',
		'Category' => 'list, show',
		'Attraction' => 'list, show',
		'Article' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Locality' => '',
		'Category' => '',
		'Attraction' => '',
		'Article' => '',
		
	)
);
