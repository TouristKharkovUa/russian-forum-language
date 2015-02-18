<?php
/** 
* I'm request you retain the copyright notice below including the link to site author.
*
* info_acp_similar_topics [Russian]
*
* @package language
* @version $Id: info_acp_similar_topics.php, v 1.4.6 2014/06/11 23:10:26 Porutchik Exp $
* @copyright (c) 2008-2014 Sergey aka Porutchik, http://forum.aeroion.ru
* @license http://opensource.org/licenses/rpl1.5.txt Reciprocal Public License 1.5
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

global $phpbb_root_path, $phpEx, $main_install_file;

$lang = array_merge($lang, array(
// ACP block
	'ACP_SIMILAR_TOPICS'						=> 'Похожие темы',
	'ACP_SIMILAR_TOPICS_EXPLAIN'				=> 'На этой странице вы можете настроить поиск похожих тем.',
	'ACP_SIMILAR_SETTINGS'						=> 'Настройки',
	'ACP_SIMILAR_TOPICS_MOD_VERSION'			=> 'Версия мода: ',
	'LOG_CONFIG_SIMILAR_TOPICS'					=> '<strong>Редактирование настроек поиска похожих тем.</strong>',
	'TOGGLE_DISPLAY'							=> 'Показать/скрыть',
	
	'SIMILAR_STOPWORDS'							=> 'Исключать стоп-слова',
	'SIMILAR_IGNORE_FORUMS'						=> 'Игнорируемые форумы',
	'SIMILAR_IGNORE_FORUMS_EXPLAIN'				=> 'Отметьте форумы, в которых поиск похожих тем будет игнорироваться (например тестовый форум, форум для трепа и т.д.).',
	'SIMILAR_NOSHOW_FORUMS'						=> 'Не показывать в форумах',
	'SIMILAR_NOSHOW_FORUMS_EXPLAIN'				=> 'Отметьте форумы, в которых список похожих тем показывать не надо.',
	
	'SIMILAR_SORT_TYPE'							=> 'Сортировать темы',
	'SIMILAR_SORT_TYPE_EXPLAIN'					=> 'Выберите метод сортировки похожих тем',
	'SIMILAR_SORT_DATE'							=> 'по времени сообщения',
	'SIMILAR_SORT_RELEV'						=> 'по релевантности',
	'SIMILAR_MAX_TOPICS'						=> 'Максимальное количество тем для показа',
	'SIMILAR_POSTING'							=> 'Включить поиск при создании новой темы или редактировании',
	'SIMILAR_VIEWTOPIC'							=> 'Показывать список на странице просмотра темы',
	'SIMILAR_MIN_AMOUNT_WORDS_VIEWTOPIC'		=> 'Мин. количество слов (для страницы темы).<br />Установите 0, если не требуется',
	'SIMILAR_MIN_AMOUNT_WORDS_VIEWTOPIC_EXPLAIN'=> 'Минимальное количество слов в заголовке темы для вывода похожих тем.',
	'SIMILAR_MIN_AMOUNT_WORDS_POSTING'			=> 'Мин. количество слов (при создании темы).<br />Установите 0, если не требуется',
	'SIMILAR_MIN_AMOUNT_WORDS_POSTING_EXPLAIN'	=> 'Минимальное количество слов в названии темы для вывода похожих тем.',
	'SIMILAR_MIN_RELEVANCE'						=> 'Минимальная релевантность.<br />Установите 0, если не требуется',
	'SIMILAR_MIN_RELEVANCE_EXPLAIN'				=> 'Контролирует релевантность названия темы для вывода похожих тем. Это значение установите опытным путём.',
	'SIMILAR_USE_BOOLEAN_MODE'					=> 'Использовать логический режим поиска',
	'SIMILAR_USE_BOOLEAN_MODE_EXPLAIN'			=> 'Использование поиска без контроля релевантности и 50% пороговой величины.',
	'SIMILAR_USE_CACHE'							=> 'Использовать кэш',
	'SIMILAR_USE_CACHE_EXPLAIN'					=> 'Использование кэша phpBB для хранения результатов поиска похожих тем при просмотре темы.',
	'SIMILAR_USE_CACHE_TIME'					=> 'Время хранения в кэше (сек.)',
	'SIMILAR_USE_CACHE_TIME_EXPLAIN'			=> 'Время хранения результатов поиска в кэше. По умолчанию 3600 с.',
	'SIMILAR_MIN_WORD_LEN'						=> 'Минимальная длина слова для поиска в похожих темах',
	'SIMILAR_MIN_WORD_LEN_EXPLAIN'				=> 'По умолчанию значение составляет %d символов(а). Меньшее количество не имеет смысла, так как это указано в настройке \'ft_min_word_len\' вашего MySQL.',
	'SIMILAR_OPEN_THIS_WIN'						=> 'Открывать в текущем окне',
	'SIMILAR_OPEN_THIS_WIN_EXPLAIN'				=> 'Добавляет в результатах поиска похожих тем дополнительную ссылку для открытия темы в текущем окне.',
	'SIMILAR_ACTUATION_TIME'					=> 'Интервал срабатывания при вводе названия темы (миллисек.)',
	'SIMILAR_SHOW_LAST_POST_SUBJECT'			=> 'Показать заголовок последнего сообщения темы в результатах поиска',
	'SIMILAR_VIEW_FIRST_POST'					=> 'Показывать краткое содержание первого сообщения темы',
	'SIMILAR_LENGTH_FIRST_POST'					=> 'Максимальная длина содержания, символов',
	'SIMILAR_INCLUDE_LOCKED_TOPICS'				=> 'Включать в результаты поиска закрытые темы',

	'SIMILAR_TOPIC_SUPPORT'		=> 'Новые версии и поддержку вы можете найти <a style="font-weight:bold" href="http://forum.aeroion.ru/topic317.html" onclick="window.open(this.href);return false;">на странице мода на сайте автора</a>.' . (defined('UMIL_AUTO') ? '<br /><b>Если файл ' . $main_install_file . ' не удалился автоматически, удалите его вручную.</b>' : ''),

	'SIMILAR_TOPICDESC'			=> 'Использовать описание темы при поиске',
	'SIMILAR_TOPICDESC_EXPLAIN'	=> '(Обнаружен установленный мод Topic Description)',
	'SIMILAR_TOPICDESC_FIELD'	=> 'Название поля (не меняйте без необходимости)',
	
	'SIMILAR_CHANGE_TOPIC_TITLE'	=> 'Тип поля <u>topic_title</u> отличается от типа <i>varchar</i>',
	'SIMILAR_CHANGE_TOPIC_TITLE_EXPLAIN' => 'Для корректной работы мода его необходимо изменить.<br />Программа попытается сделать это автоматически',
	
	'SIMILAR_CHANGE_TOPICS_TABLE'	=> 'Тип таблицы <u>' . TOPICS_TABLE . '</u> отличается от типа <i>MyISAM</i>',
	'SIMILAR_CHANGE_TOPICS_TABLE_EXPLAIN' => 'Для корректной работы мода его необходимо изменить.<br />Программа попытается сделать это автоматически',

// Install block
	'SIMILAR_INSTALL'			=> 'Похожие темы',
	'SIMILAR_INSTALL_EXPLAIN' 	=> '<strong>ВНИМАНИЕ!<br />Рекомендуется запускать данную установку только после выполнения инструкции по внесению изменений в код файлов конференции (или выполнения установки с помощью AutoMod)!<br />Также настоятельно рекомендуется включить опцию Отображать все результаты (ниже)!</strong>',
	'SIMILAR_CUSTOM1_FUNCTION'	=> 'Проверка удаления модуля/добавление параметров мода/обновление таблиц',
	'SIMILAR_CUSTOM2_FUNCTION'	=> 'Проверка обновления кеша',

	'SIMILAR_INSTALLED'				=> 'Мод поиска похожих тем успешно <strong>установлен</strong>.',
	'SIMILAR_NO_FILES_MODIFIED'		=> 'Вы не внесли изменения в файлы в соответствии с инструкцией по установке мода.',
	'SIMILAR_NOT_INSTALLED'			=> 'На вашей конференции не был установлен данный мод поиска похожих тем.',
	'SIMILAR_UNINSTALLED'			=> 'Мод похожие темы успешно <strong>удалён</strong> из базы данных.<br /><b>Если файлы ' . $main_install_file . ' или ' . $phpbb_root_path . 'includes/hooks/hook_similar_topic.' . $phpEx . ' не удалились автоматически, удалите их вручную и очистите кэш в администраторском разделе.</b>',
));

// Common block
$lang = array_merge($lang, array(
	'SIMILAR_TOPICS'					=> 'Похожие темы',
	'SIMILAR_TOPICS_THIS_WIN'			=> '[в этом окне]',
	'SIMILAR_TOPICS_THIS_WIN_EXPLAIN'	=> 'Открыть ссылку в текущем окне',
	'SIMILAR_TOPICS_UPDATE'				=> 'Похожие темы',	
	'SIMILAR_TOPICS_UPDATE_EXPLAIN'		=> 'Показать/Обновить список похожих тем',	
	'SIMILAR_TOPICS_WORKING'			=> 'Поиск тем с похожими названиями....',
));

if (defined('UMIL_AUTO'))
{
	global $ft_min_word_len; 
	$lang['SIMILAR_MIN_WORD_LEN_EXPLAIN'] = sprintf($lang['SIMILAR_MIN_WORD_LEN_EXPLAIN'], $ft_min_word_len);
}

?>