<?php
/**
*
* shop [Russian]
*
* @package language
* @version $Id: shop.php  $
* @copyright (c) 2005 phpBB Group
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

$lang = array_merge($lang, array(
	'NO_SHOP' => 'Магазин не найден',
	'SHOP_DISABLE' => 'Магазин временно выключен, попробуйте зайти позже.',
	'LOGIN_VIEWSHOP'=>'Для просмотра этого магазина вы должны быть авторизованы.',
	'NO_PARENT'	=> 'Все',
	'FOTO_EXIST'	=> 'Только с фото',
	'SEARCH_TEXT'	=> 'Текст',
	'NO_TOPICS_FILTER' => 'В форуме нет объявлений удовлетворяющих Вашему запросу.',
	'EMPTY_OPTION'	=> '',
	'TAG_IS_REQUIRE_EXPLAIN' => 'Поля, отмеченные *, обязательны для заполнения',
	'TAG_SHOP_PROFILE_EXPLAIN' => 'Поля, отмеченные **, берутся из Вашего профиля и не могут быть отредактированы при создании объявления',
	'EMPTY_REQUIRE_TAGS'	=> 'Следующие обязательные поля не заполнены или заполнены не верно',
	'SHOP_PROFILE_EMPTY' => 'Обязательные для создания объявлений поля из Вашего профиля не заполнены.<br/>Проидите в %1$sЛичный раздел%2$s для заполнения',
	'EMPTY_CURRENCY_TAG' => 'Не выбрана валюта',
	
	'PRICE_FROM'		=> 'с',
	'PRICE_TO'			=> 'по',
	'PRICE_BUY_NOW_FROM'=> 'с',
	'PRICE_BUY_NOW_TO'	=> 'по',
	
	'SHOP_AUTHOR_EMPTY'	=> 'Автор объявлений не указан',

));

?>