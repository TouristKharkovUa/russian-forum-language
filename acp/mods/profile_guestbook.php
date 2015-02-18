<?php
/**
* acp_profile_guestbook (phpBB Permission Set) [English]
*
* @package profile guestbook
* @version 1.0.0
* @copyright (c) 2010 Paul Sohier
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// 'Page %s of %s' you can (and should) write 'Page %array('lang' => '', 'cat' => 'pg')$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


// User Permissions
$lang = array_merge($lang, array(
	'ACP_PROFILE_GUESTBOOK_SETTINGS'		=> 'Основные настройки Гостевой книги',
	'ACP_PROFILE_GUESTBOOK_SETTINGS_EXPLAIN'	=> 'Основные настройки МОДа Гостевая книга',
	
	'PROFILE_GUESTBOOK_ENABLED'	=> 'Включить МОД',
	
	'PROFILE_GUESTBOOK_NOTIFICATION'		=> 'Включить уведомления Гостевой книги',
	'PROFILE_GUESTBOOK_NOTIFICATION_EXPLAIN'	=> 'Если включено, пользователям разрешено получать уведомления о новых сообщения в Гостевой книге.',
	

	'WELCOME_GUESTBOOK'	=> 'Обзор Гостевой книги',
	'ADMIN_GUESTBOOK'	=> 'Вы можете найти здесь основные виды МОДа Гостевая книга с некоторыми основными статистиками и некоторыми опциями. <br />Если Вы найдете ошибки, сообщите на трекере ошибок, расположенный <a href="http://phpbbguestbook.com/viewforum.php?f=5">Здесь</a>. Поддержка там же',
	'GUESTBOOK_STATS'	=> 'Статистика гостевой книги',
	
	'GB_OPTIONS'		=> 'Основные действия',
	'DELETE_ALL'		=> 'Удалить <em>ВСЕ</em> сообщения от <em>ВСЕХ</em> пользователей.',
	'RESYNC_ALL'		=> 'Синхронизировать счетчики сообщений пользователей.',

	'VERSION_UP_TO_DATE'		=> 'Версия актуальна.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Версия не актуальная. Вы должны обновиться.',
	'VERSIONCHECK_FAIL'		=> 'Ошибка соединения с сервером.',
	
	'CURRENT_VERSION'	=> 'Установленная версия:',
	'LATEST_VERSION'	=> 'Последняя версия:',
	'NOT_AVAILABLE'		=> 'Не доступно',
	
	'NUMBER_OF_GB'		=> 'Количество пользователей с гостевыми книгами',
	'NUMBER_OF_POSTS'	=> 'Количество сообщений в гостевых книгах',

	'CONFIRM_GB_DELETE_ALL'	=> 'Вы уверены что хотите удалить <em>ВСЕ</em> сообщения в гостевых книгах всех пользователей? <br />Это невозможно восстановить!',
	
	'ERROR_NOT_HAPPEN'	=> 'Это не невозможно сделать, 0 сообщений',
));

