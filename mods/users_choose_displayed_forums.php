<?php
/** 
*
* Choose displayed forums [English]
*
* @package language
* @version $Id: users_choose_displayed_forums.php 1 2009-05-13 00:00:00Z Thatbitextra $
* @copyright (c) 2009 Thatbitextra (http://www.thatbitextra.com/)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.ï
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'acl_f_display'			=>	array('lang' => 'Может скрывать показ форумов', 'cat' => 'post'),
	'UCP_PREFS_INDEX'		=>	'Управление показом форумов',
	'CANNOT_NOT_DISPLAY'	=>	'Вы не можете скрыть показ этого форума',
	'SHOW'					=>	'Показать',
	'HIDE'					=>	'Скрыть',
));

?>