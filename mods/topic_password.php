<?php
/**
*
* @package phpBB Topic Password MOD
* @author Kamahl kamahl19@gmail.com
* @version 2.0.1
* @copyright (c) 2012 Kamahl www.phpbb3hacks.com
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

$lang = array_merge($lang, array(
  'LOGIN_TOPIC'                           => 'Вы должны указать пароль для входа в эту тему.',
	
  'FORUM_ALLOW_TOPIC_PASSWORD'            => 'Разрешить пароли для тем',
  'FORUM_ALLOW_TOPIC_PASSWORD_EXPLAIN'    => 'Разрешить пользователям использовать пароли для защиты тем.',
));
?>