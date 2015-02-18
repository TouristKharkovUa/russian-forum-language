<?php
/**
*
* prime_captcha [Russian]
*
* @package language
* @version $Id: prime_captcha.php,v 1.0.4 2008/10/07 13:34:00 primehalo Exp $
* @copyright (c) 2008 AllCity ~ http://allcity.net.ru/
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
// ’ ≫ “ ” …
//

$lang = array_merge($lang, array(
	// ACP
	'PRIME_CAPTCHA_POST'			=> 'Текстовое подтверждение для гостей:',
	'PRIME_CAPTCHA_POST_EXPLAIN'	=> 'Для предотвращения массовой отправки сообщений анонимные пользователи при размещении сообщений должны будут ввести правильный ответ, в форму вопроса.',
	'PRIME_CAPTCHA_REG'				=> 'Текстовое подтверждение при регистрации:',
	'PRIME_CAPTCHA_REG_EXPLAIN'		=> 'Для предотвращения автоматических регистраций новые пользователи при регистрации должны будут ввести правильный ответ, в форму вопроса.',
	'PRIME_CAPTCHA_ENABLE'			=> 'Включено',
	'PRIME_CAPTCHA_TEMPLATE'		=> 'Отдельная страница',
	'PRIME_CAPTCHA_DISABLE'			=> 'Отключено',

	// General
	'PRIME_CAPTCHA_MOD_NAME'		=> 'Prime CAPTCHA',
	'PRIME_CAPTCHA_TITLE'			=> 'Система проверки на человечность',
	'PRIME_CAPTCHA_DESCRIPTION'		=> 'Для предотвращения автоматических регистраций на конференции требуется ввести правильный ответ, в форму вопроса.',
	'PRIME_CAPTCHA_INSTRUCTIONS'	=> 'Ответьте правильно на вопрос, чтобы подтвердить, что Вы человек',
	'PRIME_CAPTCHA_INCORRECT'		=> 'Ваш ответ на вопрос проверки на человечность был неверен.',
	'PRIME_CAPTCHA_EMPTY'			=> 'Вы не ответили на вопрос проверки на человечность.',
	'PRIME_CAPTCHA_NO_KEY'			=> 'Человечность не подтверждена, ввод признан автоматическим.',
	'PRIME_CAPTCHA_SUBMIT'			=> 'Добавить ответ',
));

?>