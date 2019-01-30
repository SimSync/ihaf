<?php
/*
	 * e107 website system
	 *
	 * Copyright (C) 2008-2009 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 * Plugin language file - ihaf (Insert header and footer)
	 * $URL$
	 * $Id$
	 *
	*/


	define("IHAF_TITLE", "Insert header and footer");
	define("IHAF_HELP", "Insert header and footer lets you insert custom javascript and css (e.g. Matomo, Piwik, etc.) into the header and/or footer of the page.\n\nDo not forget to surround the script or css with the appropriate tags &lt;script&gt; or &lt;style&gt;!\nDo not try to use this fields to display text on the page. Use it only for scripts and css!");

	define("IHAF_HEADER", "Script or custom css to add to the header");
	define("IHAF_HEADER_HELP", "Put the script or text that should be added to the header into this text area.");

	define("IHAF_FOOTER", "Script or custom css to add to the footer");
	define("IHAF_FOOTER_HELP", "Put the script or text that should be added to the footer into this text area.");

	define("IHAF_HEADER_AREA", "Activate in header area");
	define("IHAF_HEADER_AREA_HELP", "Should the header text be enabled in admin and/or user area?");

	define("IHAF_FOOTER_AREA", "Activate in footer area");
	define("IHAF_FOOTER_AREA_HELP", "Should the footer text be enabled in admin and/or user area?");

	define("IHAF_BOTH", "Both");
	define("IHAF_ADMIN", "Admin area only");
	define("IHAF_USER",  "User area only");
