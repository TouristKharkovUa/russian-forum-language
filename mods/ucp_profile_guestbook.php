<?php
/**
*
* profile_guestbook [English]
*
* @package profile guestbook
* @version 1.0.0
* @copyright (c) 2010 Paul Sohier
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

/**
 * UMIL lang vars.
 **/
$lang = array_merge($lang, array(
	'ENABLE_NOTIFICATION'	=> 'Включить уведомления о новых сообщения в Гостевой книге',
	'NO_NOTIFICATION'	=> 'Уведомления отключены Администратором',
	'NO_NOTIFY'		=> 'Уведомления запрещены Администратором форума', // @TODO: Check if above lang ite is used as well.
	
	'NOTIFY_METHOD_PM'		=> 'ЛС',
	'NOTIFY_METHOD_EMAIL_PM'	=> 'ЛС и e-mail',
	'NOTIFY_METHOD_IM_PM'		=> 'ЛС и jabber',
	'NOTIFY_METHOD_ALL'		=> 'ЛС, jabber и e-mail',
	
	'GB_JABBER_DISABLED'	=> 'Jabber запрещен, выберите другой способ уведомления',
	'GB_EMAIL_DISABLED'		=> 'Email запрещен, выберите другой способ уведомления',	
));


