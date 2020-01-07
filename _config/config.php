<?php
//------------------//
//  ERRORS DISPLAY  //
//------------------//

//!\\ A enlever après développement
error_reporting(E_ALL);
ini_set('display_errors',true);

//----------//
// SESSIONS //
//----------//

ini_set('session.cookie_lifetime',false);
session_start();


//------------//
// CONSTANTS  //
//------------//

//paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0,-9));
define("PATH", substr($_SERVER['PHP_SELF'],0,-9));

//Website informations
define("WEBSITE_TITLE", "Monsite");
define("WEBSITE_NAME", "Monsite");
define("WEBSITE_URL", "http://monsite.com");
define("WEBSITE_DESCRIPTION", "blabla");
define("WEBSITE_KEYWORDS", "s");
define("WEBSITE_LANGUAGE", "FR");
define("WEBSITE_AUTHOR", "MathieuCréation");
define("WEBSITE_AUTHOR_MAIL", "mathieu");

// Facebook OPen Graph Tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
//define("WEBSITE_HOST", "localhost");
//define("WEBSITE_NAME", "roffet");
//define("WEBSITE_USER", "root");
//define("WEBSITE_PASSWORD", "1234");

// DataBase informations
define("DATABASE_HOST", "latelierqlmaitre.mysql.db");
define("DATABASE_NAME", "latelierqlmaitre");
define("DATABASE_USER", "latelierqlmaitre");
define("DATABASE_PASSWORD", "Albator86");