<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2014 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Related configuration module - News
 *
 *
*/

if (!defined('e107_INIT')) { exit; }

if (!e107::isInstalled('ihaf')) {
	return '';
}

$area = e107::pref('ihaf','ihaf_header_area', 2);

if((USER_AREA && $area != 1) || (ADMIN_AREA && $area != 2)) // 0 = both, 1 = adminarea, 2 = userarea
{
	$text = e107::pref('ihaf','ihaf_header', '');
	if (!empty($text))
	{
		echo "\n<!-- IHAF Header start -->\n$text\n<!-- IHAF Header end -->\n";
	}
	unset($text);
}
unset($area);
