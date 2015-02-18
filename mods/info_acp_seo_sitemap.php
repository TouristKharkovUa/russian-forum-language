<?php
/**
*
* info_acp_seo_sitemap [Russian]
*
* @package phpBB3 SEO Sitemap
* @copyright (c) 2014 www.phpbb-work.ru
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
	'SEOMAP'						=> 'SEO Карта сайта',
	'SEOMAP_VERSION'				=> 'Версия: %s',
	'SEOMAP_EXPLAIN'				=> 'Обратите внимание, что применение необязательных опций priority (приоритет) и changefreq (частота обновления) может дать некоторый позитивный результат, но рекомендуется использовать их вместе и только после анализа того, какие страницы должны считаться более важными по сравнению с другими, прежде чем принимать какие-либо решения. Если вы не знаете или не уверены, то лучше отключите эти опции. Более подробно о priority и changefreq читайте <a href="http://www.sitemaps.org/ru/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">здесь</a>.<br />Для отключения приоритета введите 0.',
	'SEOMAP_SETTINGS'				=> 'Настройки SEO Sitemap',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>Изменены настройки SEO Sitemap</strong>',
	'SEOMAP_SAVED'					=> 'Настройки SEO Sitemap успешно изменены.',
	'SEOMAP_EXCLUDED'				=> 'Исключённые форумы',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'Выбранные здесь форумы и темы из них не будут внесены в карту сайта для ботов.<br /><strong>Внимание:</strong> Категории и форумы без тем исключены из карты по умолчанию.',
	'SEOMAP_CACHE_TIME'				=> 'Время хранения в кеше',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'Для уменьшения нагрузки на сервер созданная карта сайта кешируется на некоторое время. По истечении этого времени она будет создана заново. Укажите здесь время в часах, на которое карта будет сохранена в кеше или введите 0 для отключения кеширования.',
	'SEOMAP_URL_COUNT'				=> 'Общее число URL в карте: %s',
	'SEOMAP_URL_LIMIT'				=> 'Лимит URL',
	'SEOMAP_URL_LIMIT_EXPLAIN'		=> 'Максимальное число URL в одном файле карты, не более 50000 по стандарту sitemap. Поставьте меньше, если испытываете проблемы с превышением лимитов. Если количество URL в карте сайта превысит заданное здесь число, она будет автоматически разбита на несколько файлов.',
	'SEOMAP_PRIORITY_0'				=> 'Приоритет для обычных тем',
	'SEOMAP_PRIORITY_1'				=> 'Приоритет для прикрепленных тем',
	'SEOMAP_PRIORITY_2'				=> 'Приоритет для объявлений',
	'SEOMAP_PRIORITY_3'				=> 'Приоритет для "важных" тем',
	'SEOMAP_PRIORITY_F'				=> 'Приоритет для форумов',
	'SEOMAP_FREQ_0'					=> 'Частота обновления обычных тем',
	'SEOMAP_FREQ_1'					=> 'Частота обновления прикрепленных тем',
	'SEOMAP_FREQ_2'					=> 'Частота обновления объявлений',
	'SEOMAP_FREQ_3'					=> 'Частота обновления "важных" тем',
	'SEOMAP_FREQ_F'					=> 'Частота обновления форумов',
	'SEOMAP_FREQ_NEVER'				=> 'Никогда',
	'SEOMAP_FREQ_YEARLY'			=> 'Ежегодно',
	'SEOMAP_FREQ_MONTHLY'			=> 'Ежемесячно',
	'SEOMAP_FREQ_WEEKLY'			=> 'Еженедельно',
	'SEOMAP_FREQ_DAILY'				=> 'Ежедневно',
	'SEOMAP_FREQ_HOURLY'			=> 'Ежечасно',
	'SEOMAP_FREQ_ALWAYS'			=> 'Постоянно',

// Install section
	'SEOMAP_INSTALL'				=> 'phpBB3 SEO Sitemap',
	'SEOMAP_INSTALL_EXPLAIN'		=> '<strong>ВНИМАНИЕ! Рекомендуется включить опцию "Отображать все результаты" ниже.</strong>',
	'SEOMAP_SUPPORT'				=> 'Новые версии мода и поддержку вы можете найти <a style="font-weight: bold;" href="http://www.phpbb-work.ru/seo-sitemap-t19.html" onclick="window.open(this.href);return false;">на странице мода на сайте автора</a>.',
));

?>