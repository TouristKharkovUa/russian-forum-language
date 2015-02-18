<?php
/**
*
* ucp_shop [Russian]
*
* @package language
* @version $Id: ucp_shop.php 2013 Pazh $
* @copyright (c) 2013 Pazh
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
	'UCP_SHOP'				=> 'Магазин',
	
	'SHOP_DISABLE' => 'Магазин временно выключен, попробуйте зайти позже.',
	
	'UCP_SHOP_CONFIG'	=> 'Настройки',
	'UCP_SHOP_ADS'		=> 'Ваши объявления',
	'EMPTY_OPTION'		=> '',
	'SHOP_CONFIG_UPDATED'	=> 'Настройки профиля для Магазина успешно изменены',
	
	'SHOP_EMPTY_CITY'	=> 'Вы не выбрали город своего нахождения',
	'SHOP_EMPTY_PHONE'	=> 'Вы не указали контактный телефон',
	
	'UPLOAD_PRICE_FILE'	=> 'Загрузить прайс-лист (Excel-файл)',
	'PRICE_LOAD'		=> 'Загрузить',
	'GENERATE_TEMPLATE_FILE'	=> 'Сгенерировать файл-шаблон для создания прайса',
	'GENERATE'			=> 'Сгенерировать',
	'WRONG_FILE_EXT'	=> 'Не верный тип файла. Разрешен только xls, xlsx',
	'PRICE'				=> 'Прайс',
	'SHOP_MESSAGE'		=> 'Сообщение',
	'SHOP_CURR'			=> 'Валюта',
	'SHOP_ATTACHMENTS'	=> 'Вложения',
));

?>