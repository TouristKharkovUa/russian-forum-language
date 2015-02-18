<?php
/**
*
* sv_reputation[Russian]
*
* @package language
* @version $Id: sv_reputation.php,v 1 2010-04-17 $ 
* @copyright (c) 2008 phpBB Group
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
	'ACP_SV_REPUTATION'						=> 'Репутация',
	'ACP_SV_REPUTATION_ADVANCED'			=> 'Расширенные настройки',
	'ACP_SV_REPUTATION_ADV_ENABLE'			=> 'Включить расширенные настройки',
	'ACP_SV_REPUTATION_ADV_ENABLE_EXPLAIN'	=> 'Дополнительные возможности позволяют автоматически добавлять пользователя в дополнительне группы, когда репутация опускается до заданных значений. Настроив заранее права этих групп можно ограничивать права пользователей с низкой репутацией.',
	'ACP_SV_REPUTATION_CHANGE'				=> 'Изменение репутации',
	'ACP_SV_REPUTATION_CHANGE_VALUE'		=> 'Значение',
	'ACP_SV_REPUTATION_CHANGE_VALUE_EXPLAIN'=> 'Введите величину изменения репутации. Допускается отрицательное и положительное значение.',
	'ACP_SV_REPUTATION_COMMENT'				=> 'Комментарий',
	'ACP_SV_REPUTATION_COMMENT_EXPLAIN'		=> 'Оставьте комментарий, по какой причине вы изменяете репутацию пользователя',
	'ACP_SV_REPUTATION_CONFIG'				=> 'Настройки репутации',
	'ACP_SV_REPUTATION_CONFIG_SAVED'		=> 'Настройки репутации сохранены',
	'ACP_SV_REPUTATION_ENABLE'				=> 'Включить репутацию',
	'ACP_SV_REPUTATION_ENABLE_EXPLAIN'		=> 'Включает мод репутации',
	'ACP_SV_REPUTATION_EXPLAIN'				=> 'Настройки репутации',
	'ACP_SV_REPUTATION_GROUP1'				=> 'Группа1',
	'ACP_SV_REPUTATION_GROUP1_EXPLAIN'		=> 'Группа1 описание',
	'ACP_SV_REPUTATION_GROUP1_LIMIT'		=> 'Репутация для группы 1',
	'ACP_SV_REPUTATION_GROUP1_LIM_EXPLAIN'	=> 'До какого уровня должна опуститься репутация пользователя, чтобы он автоматически добавился в группу 1',
	'ACP_SV_REPUTATION_GROUP2'				=> 'Группа2',
	'ACP_SV_REPUTATION_GROUP2_EXPLAIN'		=> 'Группа2, описание',
	'ACP_SV_REPUTATION_GROUP2_LIMIT'		=> 'Репутация для группы 2',
	'ACP_SV_REPUTATION_GROUP2_LIM_EXPLAIN'	=> 'До какого уровня должна опуститься репутация пользователя, чтобы он автоматически добавился в группу 2',
	'ACP_SV_REPUTATION_INSERT_USER'			=> 'Введите имя пользователя',
	'ACP_SV_REPUTATION_MAIN'				=> 'Основные настройки',
	'ACP_SV_REPUTATION_NO_COMMENT'			=> 'Комментарий отсутствует',
	'ACP_SV_REPUTATION_OTHERVIEW'			=> 'Обзор',
	'ACP_SV_REPUTATION_PERPAGE'				=> 'Комментариев на страницу',
	'ACP_SV_REPUTATION_PERPAGE_EXPLAIN'		=> 'Сколько комментариев выводится на одну страницу в списке просмотра репутации',
	'ACP_SV_REPUTATION_SELECT_USER'			=> 'Выбор пользователя',
	'ACP_SV_REPUTATION_SYNCHRO'				=> 'Синхронизация репутации',
	'ACP_SV_REPUTATION_USERS'				=> 'Пользователи',
	'ACP_SV_REPUTATION_USERS_EXPLAIN'		=> 'Просмотр и изменение репутации пользователей',
	'ACP_SV_REPUTATION_USER_UPDATED'		=> 'Репутация пользователя обновлена.',
	'REPUTATION'							=> 'Репутация',

));
?>