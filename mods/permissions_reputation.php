<?php
/**
*
* sv_reputation[Russian]
*
* @package language
* @version $Id: sv_reputation.php,v 1 2010-04-17 $ 
* @copyright (c) 2008 phpBB Group
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
// ’ » “ ” …
//

// Adding new category
$lang['permission_cat']['reputation'] = 'Репутация';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_u_rep_see'			=> array('lang' => 'Может видеть репутацию пользователей', 'cat' => 'reputation'),
	'acl_u_rep_give'		=> array('lang' => 'Может изменять  репутацию пользователей', 'cat' => 'reputation'),
	'acl_u_rep_read'		=> array('lang' => 'Может просматривать комментарии', 'cat' => 'reputation'),
	'acl_u_rep_author'		=> array('lang' => 'Может видеть автора изменения репутации', 'cat' => 'reputation'),
	'acl_u_rep_multi'		=> array('lang' => 'Может менять репутацию пользователей неоднократно', 'cat' => 'reputation'),
	'acl_u_rep_free'		=> array('lang' => 'Может менять репутацию пользователей без ущерба для себя', 'cat' => 'reputation'),
));
?>