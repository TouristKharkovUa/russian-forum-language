<?php
/**
*
* acp_permissions_evaluation [English]
*
* @package evaluation topics
* @version $Id: permissions_evaluation.php , v 1.0.6 2008-06-13 Novan $
* @copyright (c) 2008 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated by : Luuk - luukware@home.nl
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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

$lang['permission_cat']['evaluation'] = 'Topic Evaluation';

$lang = array_merge($lang, array(
	'acl_f_evaluation'			=> array('lang' => 'Может оценивать темы', 'cat' => 'evaluation'),
	'acl_f_evaluation_see'		=> array('lang' => 'Показывать оценки тем', 'cat' => 'evaluation'),
	'acl_f_evaluation_own'		=> array('lang' => 'Авторы могут оценивать свои темы', 'cat' => 'evaluation'),
	'acl_f_evaluation_change'	=> array('lang' => 'Может изменять оценки', 'cat' => 'evaluation'),
));
?>