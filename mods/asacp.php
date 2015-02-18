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
	'ASACP_BAN'				=> 'Бан в одно нажатие',
	'ASACP_BAN_COMPLETE'	=> 'Вы успешно забанили пользователя.<br /><br /><a href="%s">Нажмите здесь для возврата в профиль пользователя.</a>',
	'ASACP_BAN_CONFIRM'		=> 'Вы действительно хотите забанить пользователя %s?  Все действия, разрешенные в настройках Anti-Spam системы в рамках процедуры "Бан в одно нажатие" будут проделаны для данного пользователя.<br /><br /><strong>Эти действия необратимы!</strong>',
	'ASACP_CREDITS'			=> 'Защищено <a href="http://www.lithiumstudios.org" target="_blank">Anti-Spam ACP</a>',

	'FOUNDER_ONLY'			=> 'Вы должны быть Основателем для доступа к этой странице.',

	'IP_SEARCH'				=> 'IP поиск',

	'MORE'					=> 'Далее',

	'PROFILE_SPAM_DENIED'	=> 'Одно или более из введенных полей было отмечено как спам.',

	'REMOVE_ASACP'			=> 'Удалить Anti-Spam систему',
	'REMOVE_ASACP_CONFIRM'	=> 'Вы уверены что хотите удалить изменения БД, сделанные Anti-Spam ACP Mod?<br /><br />Перед утверждение убедитесь, что вы удаляете исправления файлов связанные с модом или секция БД будет восстановлена снова.',

	'SFS_SUBMIT'			=> 'Отправить информацию о профиле в <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'SIGNATURE_DISABLED'	=> 'Вам не разрешено использовать Подпись.',
	'SPAM_DENIED'			=> 'Это сообщение отмечено как спам и было удалено.',

	'USER_FLAG'				=> 'Отметка',
	'USER_FLAGGED'			=> 'Пользователь отмечен',
	'USER_FLAG_CONFIRM'		=> 'Вы действительно хотите отметить пользователя %s?',
	'USER_FLAG_NEW'			=> 'Новая отметка сохранена в Логе',
	'USER_FLAG_SUCCESS'		=> 'Пользователь был отмечен.',
	'USER_UNFLAG'			=> 'Удалить отметку',
	'USER_UNFLAG_CONFIRM'	=> 'Вы действительно хотите отменить отметку %s?',
	'USER_UNFLAG_SUCCESS'	=> 'Отметка была снята.',
));

?>