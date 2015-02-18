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
	'ADD_WORD'									=> 'Добавить слово',
	'ALLOW_FIELD'								=> 'Разрешить',
	'ASACP_BAN_CLEAR_OUTBOX'					=> 'Удаление отправленных ЛС',
	'ASACP_BAN_CLEAR_OUTBOX_EXPLAIN'			=> 'Удаление всех ЛС из папки Отправленные',
	'ASACP_BAN_DELETE_AVATAR'					=> 'Удалить аватар',
	'ASACP_BAN_DELETE_AVATAR_EXPLAIN'			=> 'Удалить аватар пользователя, когда разрешено "Бан в одно нажатие"',
	'ASACP_BAN_DELETE_POSTS'					=> 'Удалить сообщения',
	'ASACP_BAN_DELETE_POSTS_EXPLAIN'			=> 'Удалить сообщения пользователя, когда разрешено "Бан в одно нажатие"',
	'ASACP_BAN_DELETE_PROFILE_FIELDS'			=> 'Удалить профиль',
	'ASACP_BAN_DELETE_PROFILE_FIELDS_EXPLAIN'	=> 'Удалить профиль пользователя, когда разрешено "Бан в одно нажатие"',
	'ASACP_BAN_DELETE_SIGNATURE'				=> 'Удалить подпись',
	'ASACP_BAN_DELETE_SIGNATURE_EXPLAIN'		=> 'Удалить подпись пользователя, когда разрешено "Бан в одно нажатие"',
	'ASACP_BAN_MOVE_TO_GROUP'					=> 'Переместивть с группу',
	'ASACP_BAN_MOVE_TO_GROUP_EXPLAIN'			=> 'Переместить пользователя в указанную группу, когда разрешено "Бан в одно нажатие"',
	'ASACP_BAN_SETTINGS'						=> 'Бан в одно нажатие Настройки',
	'ASACP_BAN_USERNAME'						=> 'Бан ника',
	'ASACP_BAN_USERNAME_EXPLAIN'				=> 'Бан ника пользователя, когда разрешено "Бан в одно нажатие"',
	'ASACP_ENABLE'								=> 'Включить Anti-Spam ACP',
	'ASACP_ENABLE_EXPLAIN'						=> 'Установите в Нет для выключения Anti-Spam ACP систему полностью.',
	'ASACP_FLAG_LIST_EXPLAIN'					=> 'Список всех отмеченных пользователей.',
	'ASACP_IP_SEARCH_BOT_CHECK'					=> 'Проверка ботов',
	'ASACP_IP_SEARCH_EXPLAIN'					=> 'Поиск во всем форуме действия с указанных IP адресов.',
	'ASACP_IP_SEARCH_FLAG_LOG'					=> 'Лог Отметок',
	'ASACP_IP_SEARCH_LOGS'						=> 'Лог Действий',
	'ASACP_IP_SEARCH_POLL_VOTES'				=> 'Голоса в голосовании',
	'ASACP_IP_SEARCH_POSTS'						=> 'Сообщения',
	'ASACP_IP_SEARCH_PRIVMSGS'					=> 'Личные сообщения',
	'ASACP_IP_SEARCH_SPAM_LOG'					=> 'Лог Спама',
	'ASACP_IP_SEARCH_USERS'						=> 'Пользователи',
	'ASACP_LOG'									=> 'Включить Лог Спама',
	'ASACP_LOG_EXPLAIN'							=> 'Если выключено, новые пункты не будут добавлены в Лог Спама.',
	'ASACP_NOTIFY_NEW_FLAG'						=> 'Напоминать если новый пунк внесен в Лог Отметок',
	'ASACP_NOTIFY_NEW_FLAG_EXPLAIN'				=> 'Напоминать зарегистрированным пользователям когда новый пункт добавлен в Лог Отметок.',
	'ASACP_PROFILE_DURING_REG'					=> 'Показывать разрешенные поля профиля во время регистрации.',
	'ASACP_PROFILE_DURING_REG_EXPLAIN'			=> 'Если установлено в Да, любые поля, обозначенные как доступные в настройках "Поля Профиля" будут показаны во время регистрации (кроме поля Подпись).',
	'ASACP_PROFILE_FIELDS'						=> 'Поля Профиля',
	'ASACP_PROFILE_FIELDS_EXPLAIN'				=> 'Позволяет вам установить минимальное количество сообщений для разрешения заполнения полей профиля.<br /><br /><strong>После утверждения, все поля профиля будут удалены для пользователей, для которых не разрешено заполнять поля согласно новым правилам.',
	'ASACP_REGISTER_SETTINGS'					=> 'Настройки регистрации',
	'ASACP_REG_CAPTCHA'							=> 'Предварительная Captcha',
	'ASACP_REG_CAPTCHA_EXPLAIN'					=> 'Это средство показывает изображение Captcha перед началом регистрации.<br />Если включить, вы предварительно должны отключить "Разрешить визуальное подтверждение при регистрации" в Общие->Конфигурация->Регистрация пользователей чтобы пользователи не заполняли две Captcha при регистрации.',
	'ASACP_SETTINGS_UPDATED'					=> 'Anti-Spam ACP настройки были обновлены.',
	'ASACP_SFS_ACTION'							=> 'Stop Forum Spam действия',
	'ASACP_SFS_ACTION_EXPLAIN'					=> 'Действие исполнено когда аккаунт зарегистрирован и информация о профиле соответствует информации, хранящейся нв <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'ASACP_SFS_KEY'								=> 'Stop Forum Spam ключ',
	'ASACP_SFS_KEY_EXPLAIN'						=> 'Если вы хотите получить доступ для отправки информации в <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>, получите ключ API Key <a href="http://www.stopforumspam.com/signup">здесь</a> и вставьте его в это поле.',
	'ASACP_SFS_MIN_FREQ'						=> 'Минимальная частота',
	'ASACP_SFS_MIN_FREQ_EXPLAIN'				=> 'Минимальная частота (время которого аккаунт может быть активирован) до проведения каких либо действий с аккаунтом используя информацию полченную из <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'ASACP_SFS_SETTINGS'						=> 'Stop Forum Spam Настройки',
	'ASACP_SPAM_WORDS_ENABLE'					=> 'Включить Спам слова',
	'ASACP_SPAM_WORDS_ENABLE_EXPLAIN'			=> 'Установите в Нет для отключения система Спам слов.',
	'ASACP_SPAM_WORDS_EXPLAIN'					=> 'Ввод и упраление спам словами.',
	'ASACP_SPAM_WORDS_FLAG_LIMIT'				=> 'Количество отметок до принятия как спам',
	'ASACP_SPAM_WORDS_FLAG_LIMIT_EXPLAIN'		=> 'Если сообщения отмечены как спам боле чем указано раз или больше времени, сообщение будет удалено или затребовано подтверждение.',
	'ASACP_SPAM_WORDS_GUEST_ALWAYS'				=> 'Всегда проверять на гостей',
	'ASACP_SPAM_WORDS_GUEST_ALWAYS_EXPLAIN'		=> 'Будет игнорировать предельное количество сообщений гостей и всегда проверять спам слова для них.',
	'ASACP_SPAM_WORDS_PM_ACTION'				=> 'Действия для Спам ЛС',
	'ASACP_SPAM_WORDS_PM_ACTION_EXPLAIN'		=> 'Выберите действия, которые будут проделаны, если ЛС отмечено как спам.',
	'ASACP_SPAM_WORDS_POSTING_ACTION'			=> 'Действия для Спам сообщений',
	'ASACP_SPAM_WORDS_POSTING_ACTION_EXPLAIN'	=> 'Выберите действия, которые будут проделаны, если сообщение отмечено как спам.',
	'ASACP_SPAM_WORDS_POST_LIMIT'				=> 'Количество сообщений',
	'ASACP_SPAM_WORDS_POST_LIMIT_EXPLAIN'		=> 'Если пользователь имеет больше сообщений чем указано здесь, Спам слова не будут проверять для данного пользователя.<br /><strong>Если введено 0, то проверять будет всегда.</strong>',
	'ASACP_SPAM_WORDS_PROFILE_ACTION'			=> 'Действия для Спама в профиле',
	'ASACP_SPAM_WORDS_PROFILE_ACTION_EXPLAIN'	=> 'Выберите действия, которые будут проделаны, если данные в профиле пользователя отмечены как спам.',
	'ASACP_USER_FLAG_ENABLE'					=> 'Включить систему Отмечания пользователей',
	'ASACP_USER_FLAG_ENABLE_EXPLAIN'			=> 'Если выбрано Нет, то пользователь не будет добавлен в список отмеченых и никакие предыдущие отметки пользователя не будут больше сохраняться в Логе отмеченных когда они что-либо делают.',
	'ASACP_VERSION'								=> 'Данные о версии',

	'CLICK_CHECK_NEW_VERSION'					=> 'Нажмите %sздесь%s для проверки наличия новой версии.',
	'CLICK_GET_NEW_VERSION'						=> 'Нажмите %sздесь%s для получения новой версии.',

	'DELETE_SPAM_WORD'							=> 'Удалить спам слово',
	'DELETE_SPAM_WORD_CONFIRM'					=> 'Вы действительно хотите удалить спам слово?',
	'DENY_FIELD'								=> 'Запрет',
	'DENY_SUBMISSION'							=> 'Запрет отправки',

	'FLAG_USER'									=> 'Отмеnить пользователя',

	'INSTALLED_VERSION'							=> 'Установленная версия',
	'INTERESTS_POST_COUNT'						=> 'Интересы Количество сообщений',
	'INTERESTS_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',

	'LATEST_VERSION'							=> 'Последняя версия',
	'LOCATION_POST_COUNT'						=> 'Откуда Количество сообщений',
	'LOCATION_POST_COUNT_EXPLAIN'				=> 'Если Откуда стоит в положении Колчество сообщений, тогда пользователь сможет заполнить это поле после написани указанного количества сообщений.',
	'LOG_VIEW_POST'								=> '%sView Post%s',
	'LOG_VIEW_PROFILE'							=> '%sView Profile%s',

	'NOTHING'									=> 'Ничего',
	'NOT_AVAILABLE'								=> 'Не разрешено',
	'NO_ITEMS'									=> 'Никаких результатов по указаному IP адресу.',
	'NO_SPAM_WORD'								=> 'Выделенное слово не найдено.',
	'NO_SPAM_WORDS'								=> 'Нет спам слов в БД.',

	'OCCUPATION_POST_COUNT'						=> 'Професия Количество сообщений',
	'OCCUPATION_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',

	'POST_COUNT'								=> 'Количество сообщений',

	'REGEX'										=> 'Регулярное выражение',
	'REGEX_AUTO'								=> 'Auto Regex',
	'REGEX_AUTO_EXPLAIN'						=> 'Выберите Да для того чтобы система автоматически создала регулярное выражение из предложженного спам текста.',
	'REGEX_EXPLAIN'								=> 'Выберите Да для использования регулярного выражения из предложженного спам текста.',
	'REQUIRE_ADMIN_ACTIVATION'					=> 'Запрос активации у Администратора',
	'REQUIRE_APPROVAL'							=> 'Запрос подтверждения модератора',
	'REQUIRE_FIELD'								=> 'Запрос',
	'REQUIRE_USER_ACTIVATION'					=> 'Запрос активации пользователя',

	'SIGNATURE_POST_COUNT'						=> 'Подпись Количество сообщений',
	'SIGNATURE_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.<br /><br />Запрашиваемые настройки для подписи не такие как другие запросы.  Подписи не могут быть запрошевы во время регистрации.',
	'SPAM_WORD_ADD_SUCCESS'						=> 'Спам слово добавлено.',
	'SPAM_WORD_DELETE_SUCCESS'					=> 'Спам слово удалено.',
	'SPAM_WORD_EDIT_SUCCESS'					=> 'Спам слово отредактировано.',
	'SPAM_WORD_TEXT'							=> 'Спам текст',
	'SPAM_WORD_TEXT_EXPLAIN'					=> 'Если используются регулярные выражения, убедитесь что они соответствуют формату <a href="http://us2.php.net/manual/en/function.preg-match.php">preg_match</a> (включая разделитель)',

	'UCP_AIM_POST_COUNT'						=> 'AOL Instant Messenger Количество сообщений',
	'UCP_AIM_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',
	'UCP_ICQ_POST_COUNT'						=> 'ICQ  Post Count',
	'UCP_ICQ_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',
	'UCP_JABBER_POST_COUNT'						=> 'Jabber Количество сообщений',
	'UCP_JABBER_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',
	'UCP_MSNM_POST_COUNT'						=> 'MSN Messenger Количество сообщений',
	'UCP_MSNM_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',
	'UCP_YIM_POST_COUNT'						=> 'Yahoo Messenger Количество сообщений',
	'UCP_YIM_POST_COUNT_EXPLAIN'				=> 'Если установлено в Количество сообщений, тогда пользователю будет разрешено заполнить это поле после написания указанного количества сообщений.',

	'VERSION'									=> 'Версия',

	'WEBSITE_POST_COUNT'						=> 'Сообщений для вебсайта',
	'WEBSITE_POST_COUNT_EXPLAIN'				=> 'Если Вебсайт в значении Количество сообщений, то пользователь сможет заполнить это поле после написания болше чем указано сообщений.',
));

?>