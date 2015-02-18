<?php
/**
*
* common [Russian]
*
* @package language
* @version $Id: ppkbb3cker_addfields.php,v 1.000 2008/07/28 12:30:00 PPK Exp $
* @copyright (c) 2008 PPK
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

//'price'=>'ЦЕНУ УКАЗЫВАТЬ ОБЯЗАТЕЛЬНО!',
//					'size'=>'Размер для рам, одежды и пр.',
//					'number'=>'Номер рамы указывать обязательно для номерных рам',

$lang = array_merge($lang, array(
	'TRACKER_FORUM_ADDFIELDS'=> array(
		'city'=>'Город',
						'price'=>'Цена(обязательно)',
						'size'=>'Размер',
						'number'=>'Номер рамы',
						'year'=>'Год выпуска',
						'phone'=>'Телефон для связи',

						),
	'TRACKER_FORUM_ADDFIELDS_HLP'=>array(
 					'year'=>array(
					'2015',
					'2014',
					'2013',
 					'2012',
 					'2011',
 					'2010',
 					'2009',
 					'2008',
 					'2007',
 					'2006',
 					'2005',
 					'2004',
 					'2003',
 					'2002',
 					'1999',
 					'1989',
 					'1979',
 					'1969'
 					),
 					 'size'=>array(
                    'XS',
                    'S',
                    'M',
                    'L',
                    'XL',
                    'XXL',
                    '15"',
                    '16"',
                    '17"',
                    '18"',
                    '19"',
                    '20"',
                    '21"',
                    '22"',
                    '23"',
                    '48 см',
                    '50 см',
                    '52 см',
                    '54 см',
                    '55 см',
                    '56 см',
                    '57 см',
                    '58 см',
                    '60 см'

                    ),
					'city'=>array(
'Харьков',
'Алчевск',
'Белая Церковь',
'Бердянск',
'Винница',
'Горловка',
'Днепродзержинск',
'Днепропетровск',
'Донецк',
'Евпатория',
'Енакиево',
'Житомир',
'Запорожье',
'Ивано-Франковск',
'Керчь',
'Киев',
'Кировоград',
'Краматорск',
'Кременчуг',
'Кривой Рог',
'Лисичанск',
'Луганск',
'Луцк',
'Львов',
'Макеевка',
'Мариуполь',
'Мелитополь',
'Николаев',
'Никополь',
'Одесса',
'Павлоград',
'Полтава',
'Ровно',
'Севастополь',
'Северодонецк',
'Симферополь',
'Славянск',
'Сумы',
'Тернополь',
'Ужгород',
'Фастов',
'Феодосия',
'Харьков',
'Херсон',
'Хмельницкий',
'Черкассы',
'Чернигов',
'Черновцы',
'Ялта')
					),
	'TRACKER_FORUM_ADDFIELDS_DEF'=>array(),
	'TRACKER_FORUM_ADDFIELDS_BR'=>array(),
	'TRACKER_FORUM_ADDFIELDS_FIELDS'=>array(),

	'TRACKER_FORUM_ADDFIELDS_COUNT'=>array('screenshots'=>3,'poster'=>1,),
	'TRACKER_FORUM_ADDFIELDS_BBCODE'=>array('screenshots'=>'[spoiler="Скриншоты"]%s[/spoiler]','poster'=>'[spoiler="Постер"]%s[/spoiler]',),
	'TRACKER_FORUM_ADDFIELDS_BBCODES'=>array('screenshots'=>'[img]%s[/img]','poster'=>'[img]%s[/img]',),

	'TRACKER_FORUM_ADDFIELDS_TA'=>array('afilm'=>1,'tracklist'=>1,'agame'=>1,'feature'=>1,'sysreq'=>1,'launch'=>1,'addit'=>1),

	'TRACKER_FORUM_ADDFIELDS_TEXT'=>'<input class="post" size="45" type="text" name="%s" value="%s" />',
	'TRACKER_FORUM_ADDFIELDS_TEXTAREA'=>'<textarea class="post" rows="3" cols="35" name="%s">%s</textarea>',
	'TRACKER_FORUM_ADDFIELDS_SUBJECT' => array(),
));

?>
