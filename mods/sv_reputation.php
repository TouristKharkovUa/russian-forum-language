<?php
/**
*
* sv_reputation[Russian]
*
* @package sv_reputation
* @version $Id: sv_reputation.php,v 1 2010-04-17 $ 
* @copyright (c) 2010 Rayden
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

$lang = array_merge($lang, array(
	'REPUTATION_COMMENT'			=> 'Комментарий',
	'REPUTATION_FROM'				=> 'Кем выдано',
	'REPUTATION_COMMENT_EXPLAIN'	=> 'Оставьте комментарий, по какой причине вы изменяете репутацию пользователя',
	'REPUTATION_COMMENT_TOTAL'		=> 'Всего записей',
	'REPUTATION_CURRENT'			=> 'Текущая репутация',
	'REPUTATION'					=> 'Репутация',
	'REPUTATION_CHANGE'				=> 'Изменение',
	'REPUTATION_CHANGE_USER'		=> 'Изменение репутации пользователя %s, его репутация на данный момент равна <strong>%d</strong>',
	'REPUTATION_DATE'				=> 'Дата',
	'REPUTATION_DECREASE'			=> 'Понизить репутацию',
	'REPUTATION_DECREASE_INFO'		=> 'Вы собираетесь понизить репутацию пользователю. У вас вычтется 1 балл собственной репутации. ',
	'REPUTATION_DISABLED'			=> 'Репутация отключена',
	'REPUTATION_INCREASE'			=> 'Повысить репутацию',
	'REPUTATION_INCREASE_INFO'		=> 'Внимание! Вы собиратесь повысить репутацию пользователю. У вас вычтется 1 балл собственной репутации.',
	'REPUTATION_NO_COMMENT'			=> 'Комментарий отсутствует',
	'REPUTATION_NO_CHANGE'			=> 'Данные об изменениях репутации отсутствуют',
	'REPUTATION_NO_GUEST'			=> 'Гости не имеют репутации',
	'REPUTATION_NO_MODE'			=> 'Не указан режим',
	'REPUTATION_NO_MULTI'			=> 'За это сообщение вы уже выдали репутацию. У вас нет права делать это снова.',
	'REPUTATION_NO_PERMISSION'		=> 'У вас нет прав изменять репутацию',
	'REPUTATION_NO_PERMISSION_NULL'	=> 'У вас слишком мала репутация, чтобы менять ее другим',
	'REPUTATION_NO_READ'			=> 'У вас нет прав просматривать репутацию',
	'REPUTATION_NO_SELF'			=> 'Нельзя менять репутацию самому себе',
	'REPUTATION_POST'				=> 'Сообщение',
	'REPUTATION_SORT'				=> 'Репутация',
	'REPUTATION_VIEW'				=> 'Просмотр репутации',
	'REPUTATION_VIEW_USER'			=> 'Просмотр репутации пользователя ',
	'REPUTATION_UPDATED_COMMENT'	=> 'Причина обновления репутации ',
	'REPUTATION_UPDATED_INFO'		=> '',
	'REPUTATION_USER_UPDATED'		=> 'Репутация пользователя %s обновлена. Новое значение репутации равно <strong>%d</strong>.',
	'REPUTATION_USER_FROM'			=> 'Ваша, %s, репутация на данный момент равна <strong>%d</strong>',
	'REPUTATION_YOU_CHANGED'		=> 'Вы изменили репутацию пользователю %s',
	'REPUTATION_5_ERROR'     		=> 'Вы недавно уже понижали репутацию этому пользователю. ХарьковТурист не место для расправ. Будьте добрее :)',

	


));
?>