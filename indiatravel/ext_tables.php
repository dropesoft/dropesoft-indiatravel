<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Dropesoft.' . $_EXTKEY,
	'Frontendindia',
	'Frontend India'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Dropesoft.' . $_EXTKEY,
		'tools',	 // Make module a submodule of 'web'
		'backendindia',	// Submodule key
		'',						// Position
		array(
            'Dashboard'=>'show',
			'Locality' => 'list, show',
            'Category' => 'list, show',
            'Attraction' => 'list, show',
            'Article' => 'list, show',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_backendindia.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'India Travel');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiatravel_domain_model_locality', 'EXT:indiatravel/Resources/Private/Language/locallang_csh_tx_indiatravel_domain_model_locality.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiatravel_domain_model_locality');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiatravel_domain_model_category', 'EXT:indiatravel/Resources/Private/Language/locallang_csh_tx_indiatravel_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiatravel_domain_model_category');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiatravel_domain_model_attraction', 'EXT:indiatravel/Resources/Private/Language/locallang_csh_tx_indiatravel_domain_model_attraction.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiatravel_domain_model_attraction');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiatravel_domain_model_attractiontype', 'EXT:indiatravel/Resources/Private/Language/locallang_csh_tx_indiatravel_domain_model_attractiontype.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiatravel_domain_model_attractiontype');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_indiatravel_domain_model_article', 'EXT:indiatravel/Resources/Private/Language/locallang_csh_tx_indiatravel_domain_model_article.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_indiatravel_domain_model_article');
