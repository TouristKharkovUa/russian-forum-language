<?php
/**
* acp_permissions_profile_guestbook (phpBB Permission Set) [English]
*
* @package profile guestbook
* @version 1.0.0
* @copyright (c) 2010 Paul Sohier
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// 'Page %s of %s' you can (and should) write 'Page %array('lang' => '', 'cat' => 'pg')$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/


$lang['permission_cat']['pg'] = 'Profile Guestbook';


// User Permissions
$lang = array_merge($lang, array(
	'acl_u_gb_post' =>	array('lang' => 'Может писать в Гостевой книге', 'cat' => 'pg'),
	'acl_u_gb_edit' => 	array('lang' => 'Может редактировать свои сообщения', 'cat' => 'pg'),
	'acl_m_gb_edit' => 	array('lang' => 'Может редактировать сообщения', 'cat' => 'pg'),
	'acl_u_gb_delete' => 	array('lang' => 'Может удалять свои сообщения', 'cat' => 'pg'),
	'acl_m_gb_delete' => 	array('lang' => 'Может удалять сообщения', 'cat' => 'pg'),
	'acl_u_gb_view' => 	array('lang' => 'Может видеть Гостевую книгу', 'cat' => 'pg'),
	'acl_u_gb_sig' => 	array('lang' => 'Может использовать подпись', 'cat' => 'pg'),
	'acl_u_gb_smilies' => 	array('lang' => 'Может использовать смайлики', 'cat' => 'pg'),
	'acl_u_gb_bbcode' => 	array('lang' => 'Может использовать BBCode', 'cat' => 'pg'),
	'acl_u_gb_img' => 	array('lang' => 'Может использовать [img] BBcode', 'cat' => 'pg'),
	'acl_u_gb_flash' => 	array('lang' => 'Может использовать [flash] BBcode', 'cat' => 'pg'),
	'acl_u_gb_icons' => 	array('lang' => 'Может использовать иконки', 'cat' => 'pg'),
	'acl_u_gb_ignoreflood' 	=> array('lang' => 'Может игнорировать флуд-контроль', 'cat' => 'pg'),	
	
	'acl_a_gb'		=> array('lang' => 'Может видеть обзор Гостевой книги', 'cat' => 'pg'),	
	'acl_a_gb_settings'	=> array('lang' => 'Может изменять настройки Гостевой книги', 'cat' => 'pg'),
));

