<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,short_description,description,address,lat,lng,site,email,phone,mobile,fax,facebook,gplus,twitter,type,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('indiatravel') . 'Resources/Public/Icons/tx_indiatravel_domain_model_attraction.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, short_description, description, address, lat, lng, site, email, phone, mobile, fax, facebook, gplus, twitter, type',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, short_description, description, address, lat, lng, site, email, phone, mobile, fax, facebook, gplus, twitter, type, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_indiatravel_domain_model_attraction',
				'foreign_table_where' => 'AND tx_indiatravel_domain_model_attraction.pid=###CURRENT_PID### AND tx_indiatravel_domain_model_attraction.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'short_description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.short_description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'address' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.address',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'lat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.lat',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lng' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.lng',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'site' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.site',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mobile' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.mobile',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'facebook' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.facebook',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gplus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.gplus',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'twitter' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.twitter',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:tx_indiatravel_domain_model_attraction.type',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_indiatravel_domain_model_attractiontype',
				'foreign_field' => 'attraction',
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
	),
);