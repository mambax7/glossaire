<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Glossaire module for xoops
 *
 * @copyright      2021 XOOPS Project (https://xoops.org)
 * @license        GPL 2.0 or later
 * @package        glossaire
 * @since          1.0
 * @min_xoops      2.5.10
 * @author         XOOPS Development Team - Email:<jjdelalandre@orange.fr> - Website:<jubile.fr>
 */
 
require \dirname(__DIR__, 2) . '/mainfile.php';
require_once __DIR__ . '/include/common.php';
//require __DIR__ . '/include/functions-colors-set.php';
require_once (XOOPS_ROOT_PATH . "/Frameworks/JJD-Framework/load.php");

$moduleDirName = \basename(__DIR__);
// Breadcrumbs
$xoBreadcrumbs = [];
// Get instance of module
$helper = \XoopsModules\Glossaire\Helper::getInstance();
$categoriesHandler = $helper->getHandler('Categories');
$entriesHandler = $helper->getHandler('Entries');
$permissionsHandler = $helper->getHandler('Permissions');
// 
$myts = MyTextSanitizer::getInstance();
// Default Css Style
$style = \GLOSSAIRE_URL . '/assets/css/style.css';
// Smarty Default
$sysPathIcon16 = $GLOBALS['xoopsModule']->getInfo('sysicons16');
$sysPathIcon32 = $GLOBALS['xoopsModule']->getInfo('sysicons32');
$pathModuleAdmin = $GLOBALS['xoopsModule']->getInfo('dirmoduleadmin');
$modPathIcon16 = $GLOBALS['xoopsModule']->getInfo('modicons16');
$modPathIcon32 = $GLOBALS['xoopsModule']->getInfo('modicons16');
// Load Languages
\xoops_loadLanguage('main');
\xoops_loadLanguage('modinfo');