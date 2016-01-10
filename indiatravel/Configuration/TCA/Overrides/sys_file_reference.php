<?php
defined('TYPO3_MODE') or die();
/**
 * Add extra field showinpreview and some special news controls to sys_file_reference record
 */
$newSysFileReferenceColumns = [
    'showinpreview' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:indiatravel/Resources/Private/Language/locallang_db.xlf:fal_related_files.showinpreview',
        'config' => [
            'type' => 'check',
            'default' => 0
        ]
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $newSysFileReferenceColumns);
// add special news palette
$GLOBALS['TCA']['sys_file_reference']['palettes']['newsPalette'] = [
    'showitem' => 'showinpreview',
    'canNotCollapse' => true
];
$GLOBALS['TCA']['sys_file_reference']['ctrl']['rootLevel'] = -1;

