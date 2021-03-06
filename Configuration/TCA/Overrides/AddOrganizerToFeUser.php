<?php
$tmp_feusers_columns = array(
    'tx_events2_organizer' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:events2/Resources/Private/Language/locallang_db.xlf:tx_events2_organizer',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_events2_domain_model_organizer',
            'prepend_tname' => false,
            'show_thumbs' => false,
            'size' => 1,
            'maxitems' => 1,
            'wizards' => array(
                'suggest' => array(
                    'type' => 'suggest',
                    'default' => array(
                        'searchWholePhrase' => true,
                        'searchCondition' => 'tx_events2_domain_model_organizer.sys_language_uid IN (-1,0)'
                    ),
                ),
            ),
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmp_feusers_columns);
$GLOBALS['TCA']['fe_users']['types']['0']['showitem'] .= ',--div--;LLL:EXT:events2/Resources/Private/Language/locallang_db.xlf:tx_events2_tab,';
$GLOBALS['TCA']['fe_users']['types']['0']['showitem'] .= 'tx_events2_organizer';