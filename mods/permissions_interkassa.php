<?php
/**
* permissions_interkass
*
* @package language
* @version $Id: permissions_interkassa.php Pazh
* @copyright (c) 2005 phpBB Group
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

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_interkassa'	=> array('lang' => 'Может использовать сервис Interkassa', 'cat' => 'misc'),
));

?>