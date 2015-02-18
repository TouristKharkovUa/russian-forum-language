<?php
/**
*
* acp_shop [Russian]
*
* @package language
* @version $Id: acp_shop.php 2013 Pazh $
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
	'ACP_SHOP'				=> 'Магазин',
	'ACP_SHOP_EXPLAIN'		=> 'Мод создания магазина на конференции',
	'ACP_SHOP_CONFIGS'		=> 'Настройки Магазина',
	'ACP_SHOP_TAGS'			=> 'Теги',
	'ACP_SHOP_TAGS_EXPLAIN'	=> 'Список всех тегов Магазина',
	'ACP_SHOP_ENABLE'			=> 'Включить Магазина',
	'ACP_SHOP_ENABLE_EXPLAIN'	=> '',
	'ACP_SHOP_FORUM_ID'			=> 'Форум Магазина',
	'ACP_SHOP_FORUM_ID_EXPLAIN'	=> 'Выдерите один из форумов конференции, который будет являться форумом Магазина',
	'ACP_SHOP_TAG_DIRECTORY'	=> 'Тег Справочник',
	'ACP_SHOP_TAG_DIRECTORY_EXPLAIN' => 'Выберите один тег, содержимое которого являются справочниками',
	'ACP_SHOP_USER_PROFILE'	=> 'Справочники профиля пользователя',
	'ACP_SHOP_USER_PROFILE_EXPLAIN'	=> 'Выберите справочники, которые будут в профиле пользователя (например: Город)',
	'ACP_FORUMS_LIST'			=> 'Форумы для отображения вложения',
	'ACP_FORUMS_LIST_EXPLAIN'	=> 'Выберите один или несколько форумов, при просмотре которых будут отображаться одно вложение из первого сообщения',

	
	'TAGS_INDEX'				=> 'Список тегов',
	'TAG_TYPESELECT'			=> 'Тип отображения тега',
	'CREATE_TAG'				=> 'Создать тег',
	'EDIT_TAG'					=> 'Редактирование тега',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Удалить содержимое или ассоциировать с тегом',
	'DECIDE_MOVE_DELETE_SUBTAGS'	=> 'Удалить вложенные теги или переместить в тег',
	'DELETE_ALL_TAGS'			=> 'Удалить этот тег из всех тем',
	'MOVE_TOPICS_TO'			=> 'Заменить этот тег в темах на',
	
	'MOVE_TOPICS_TO'			=> 'Заменить тег на',
	'MOVE_SUBTAGS_TO'			=> 'Переместить вложенные теги в',
	'DELETE_SUBTAGS'			=> 'Удалить вложенные теги и разассоциировать из тем',
	'NO_PARENT'					=> 'Нет',
	'TAG_PARENT'				=> 'Родительский тег',
	'TAG_PARENT_EXPLAIN'		=> 'Возможно указать один или несколько родительских тегов, в которых будет отображаться информация текущего тега',
	'TAG_DELETE'				=> 'Удаление тега',
	'TAG_DELETE_EXPLAIN'		=> 'Форма ниже позволяет вам удалить тег. Если тег используется хоть в одной теме, вы можете решить, что делать с этими темами.',
	'TAG_SETTINGS'				=> 'Настройки тега',
	'DELETE_ALL_TOPICS'			=> 'Удалить все использования данного тега в темах',
	'USE_IN_SEARCH'				=> 'Отображать в поиске',
	'USE_IN_SEARCH_EXPLAIN'		=> 'Если Да, то по данному тегу возможно производить фильтрацию в форме просмотра объявлений',
	
	'TAG_NAME'				=> 'Название тега',
	'FORM_NAME'				=> 'Название элемента',
	'FORM_NAME_EXPLAIN'		=> 'Укажите название элемента анлийскими бунквами без пробелов и знаков препинания (например: Цена -> price)',
	
	'COPY'						=> 'Копировать',
	
	'FORUM_SHOP'		=> 'Справочники тегов',
	'FORUM_SHOP_EXPLAIN'=> 'Выберите один или несколько разделов из справочников тегов для отображения в этом форуме. <br/> Все подтеги будут включены автоматически.',
	'FORUMS_TAGS_REQUIRE'	=> 'Обязательные справочники',
	'FORUMS_TAGS_REQUIRE_EXPLAIN'=> 'Выберите справочники тегов, значения которых будут обязательными для заполнения в этом форуме.',
	
	//Tag types
	'TAG_TYPE_0' => 'Выпадающий список',
	'TAG_TYPE_1' => 'Выпадающий список мультивыбор',
	'TAG_TYPE_2' => 'Чекбокс',
	'TAG_TYPE_3' => 'Радиокнопки',
	'TAG_TYPE_4' => 'Поле ввода',
	
	//Messages
	'CONFIRM_TAG_DELETE'=> 'Вы уверенны что хотите удалить тег "%1s"?',
	'TAG_CREATED'		=> 'Тег успешно создан',
	'TAG_UPDATED'		=> 'Тег успешно изменен',
	'TAG_DELETED'		=> 'Тег успешно удален',
	'SHOP_CONFIG_UPDATED'=> 'Настройки Магазина изменены',
	
	//Errors
	'UNKNOWN_MODE'		=> 'Неизвестный режим',
	'TAG_NOT_FOUND'		=> 'Тег не найден',
	'TAG_NAME_EMPTY'	=> 'Название тега пустое',
	'FORM_NAME_EMPTY'	=> 'Название элемента пустое',
	'PARENT_NOT_EXIST'	=> 'Родительский тег не существует.',
	'NO_DESTINATION_TAG'=> 'Не указан тег для назначения темам',
	'SHOP_FORUM_EMPTY'	=> 'Не указан форум Магазина',
	'FORUM_TAGS_EMPTY'	=> 'Не указан справочник для Магазина',
	
	//Logs
	'LOG_SHOP_CONFIG_UPDATED'	=> '<strong>Настройки Магазина изменены</strong>',
	'LOG_TAG_MOVE_DOWN'	=> '<strong>Перемещён тег</strong> %1$s <strong>под</strong> %2$s',
	'LOG_TAG_MOVE_UP'	=> '<strong>Перемещён тег</strong> %1$s <strong>над</strong> %2$s',
	'LOG_TAG_ADD'		=> '<strong>Создан тег</strong><br />» %s',
	'LOG_TAG_EDIT'		=> '<strong>Изменен тег</strong><br />» %s',

	'LOG_TAG_DEL_TAG'					=> '<strong>Удалён тег</strong><br />» %s',
	'LOG_TAG_DEL_TAG'					=> '<strong>Удалён тег с подтегами</strong><br />» %s',
	'LOG_TAG_DEL_MOVE_TAGS'				=> '<strong>Удалён тег и перемещены подтеги</strong> в %1$s<br />» %2$s',
	'LOG_TAG_DEL_MOVE_TOPICS'			=> '<strong>Удалён тег и перепривязаны темы</strong> в %1$s<br />» %2$s',
	'LOG_TAG_DEL_MOVE_TOPICS_TAGS'		=> '<strong>Удалён тег с подтегами, перепривязаны темы</strong> в %1$s<br />» %2$s',
	'LOG_TAG_DEL_MOVE_TOPICS_MOVE_TAGS'	=> '<strong>Удалён тег, перепривязаны темы</strong> в %1$s <strong>и подтеги</strong> в %2$s<br />» %3$s',
	'LOG_TAG_DEL_TOPICS'				=> '<strong>Удалён тег с темами</strong><br />» %s',
	'LOG_TAG_DEL_TOPICS_TAGS'			=> '<strong>Удалён тег с темами и подтегами</strong><br />» %s',
	'LOG_TAG_DEL_TOPICS_MOVE_TAGS'		=> '<strong>Удалён тег с темами, перемещены подтеги</strong> в %1$s<br />» %2$s',

	
	
));

?>