<?php
/**
*
* @package	Reputation System
* @author	Pico88 (https://github.com/Pico88)
* @copyright (c) 2012
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
	'MCP_REPUTATION'				=> 'Репутация продавцов',
	'MCP_REPUTATION_FRONT'			=> 'Стартовая страница',
	'MCP_REPUTATION_LIST'			=> 'Список оценок',
	'MCP_REPUTATION_GIVE'			=> 'Дать оценку',

	'MCP_RS_ADD_WARNING'			=> 'Баллов репутации за предупреждение',
	'MCP_RS_ADD_WARNING_EXPLAIN'	=> 'Вы можете дать негативную оценку репутации для этого пользователя (за плохое поведение например). Это будет работать только если вы отметили опцию ниже.',
	'MCP_RS_POINTS'					=> 'Баллы',
	'MCP_RS_COMMENT'				=> 'Комментарий',
	'MCP_RS_GIVE_REP_POINT'			=> 'Дать оценку вместе с предупреждением',

	'LOG_USER_REP_DELETE'			=> '<b>Оценка удалена </b><br />Пользователем: %s',
	'LOG_CLEAR_POST_REP'			=> '<b>Оценка к сообщению была удалена</b><br />Сообщение: %s',
	'LOG_CLEAR_USER_REP'			=> '<b>Репутация пользователя была увлена</b><br />Пользователь: %s',

	'RS_BEST_REPUTATION'			=> 'Лучшая репутация',
	'RS_WORST_REPUTATION'			=> 'Худшая репутация',
	'RS_REPUTATION_LISTS'			=> 'Это список очков репутации. В нем вы можете найти все очки репутации. Можно использовать фильтры ниже, чтобы сократить количество результатов поиска. Чтобы найти все очки репутации, которые один пользователь дал другому, вы можете заполнить оба поля.',
	'RS_SEARCH_FROM'				=> 'Оценка ОТ',
	'RS_SEARCH_TO'				  	=> 'КОГО оценивали',
	'RS_DISPLAY_REPUTATIONS'		=> 'Показать очки репутации от предыдущих',
));

?>