<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

call_user_func(
    function () {
    	
        # Add pageTS config
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_bootstrap/Configuration/TsConfig/PageTS.typoscript">');

    },$_EXTCONF
);
