<?php
/**
*
* @package Anti-Spam ACP
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array(
	'ANTISPAM'						=> 'Anti-Spam',
	'ASACP_FLAG_LIST'				=> 'Список отмеченых пользователей',
	'ASACP_FLAG_LOG'				=> 'Лог отметок',
	'ASACP_IP_SEARCH'				=> 'IP поиск',
	'ASACP_PROFILE_FIELDS'			=> 'Поля профиля',
	'ASACP_SETTINGS'				=> 'Anti-Spam система Настройки',
	'ASACP_SPAM_LOG'				=> 'Лог Спама',
	'ASACP_SPAM_WORDS'				=> 'Спам слова',

	'LOG_ADDED_POST'				=> 'Добавлено сообщение',
	'LOG_ALTERED_PROFILE'			=> 'Изменена информация профиля',
	'LOG_ALTERED_SIGNATURE'			=> 'Изменена подпись',
	'LOG_ASACP_SETTINGS'			=> 'Обновить Anti-Spam настройки',
	'LOG_CLEAR_SPAM_LOG'			=> 'Очищен Лог спама',
	'LOG_EDITED_POST'				=> 'Отредактировано сообщение',
	'LOG_INCORRECT_CODE'			=> 'Введен неверный код подтверждения.',
	'LOG_INCORRECT_CODE_DATA'		=> 'Показанный код: "%s"<br />Введенный код: "%s"',
	'LOG_USER_SFS_ACTIVATION'		=> '%s зарегистрирован и был отмечен как СПАМ-пользователь в Stop Forum Spam.',
	'LOG_SENT_PM'					=> 'Отправлено ЛС<br />Для: %s',
	'LOG_SPAM_PM_DENIED'			=> 'ЛС было отмечено как спам и было удалено из Исходящих.<br />Тема сообщения была:<br />%s<br /><br />Текст сообщения:<br />%s',
	'LOG_SPAM_POST_DENIED'			=> 'Сообщение было отмечено как спам и удалено из отправки.<br />Тема сообщения:<br />%s<br /><br />Текст сообщения:<br />%s',
	'LOG_SPAM_PROFILE_DENIED'		=> 'Одно или несколько из введенных полей профиля отмечено как спам и было удалено.<br />Данные подптерждены:<br /><br />%s',
	'LOG_SPAM_SIGNATURE_DENIED'		=> 'Подпись отмечена как спам.<br />Подпись была:<br />%s',
	'LOG_USER_FLAGGED'				=> '%s был отмечен.',
	'LOG_USER_UNFLAGGED'			=> 'Отметка о %s была снята.',

	'acl_a_asacp'					=> array(
		'lang'						=> 'Может управлять Anti-Spam ACP',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_ban'				=> array(
		'lang'						=> 'Может банить пользователей через "Бан в одно нажатие"',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_ip_search'			=> array(
		'lang'						=> 'Может использовать IP поиск',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_profile_fields'	=> array(
		'lang'						=> 'Может изменять Настройки полей профиля',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_spam_log'			=> array(
		'lang'						=> 'Может смотреть Лог спама',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_spam_words'		=> array(
		'lang'						=> 'Может редактировать Спам слова',
		'cat'						=> 'settings',
	),

	'acl_a_asacp_user_flag'			=> array(
		'lang'						=> 'Может отмечать пользователей, просматривать Лог отметок, и просматривать список отмеченных пользователей',
		'cat'						=> 'settings',
	),

));

?>