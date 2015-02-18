<?php
/**
*
* info_ik
*
* @package - Interkassa
* @version $Id: info_ucp_ik.php Pazh
* @copyright (c) 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/*
 * @ignore
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

$lang = array_merge($lang, array(
	'UCP_IK'				=> 'Услуги',
	'UCP_IK_SHOP'			=> 'Услуги',
	'UCP_IK_INVENTORY'		=> 'Ваши неиспользованные услуги',
	'UCP_IK_CANCEL'			=> 'Отмена услуги',
	'UCP_IK_STAT'			=> 'Статистика',
	
	'IK_ITEM_ID_NOT_FOUND'	=> 'Услуга не найдена',	
	
	'IK_DISABLE'			=> 'Использование сервиса Interkassa отключено',
	'SORRY_AUTH_IK'			=> 'Вам запрещено использовать сервис Interkassa',
	'IK_NO_ITEMS'			=> 'Нет доступных Услуг',	
	'IK_LOG_IN'				=> 'Вы должны войти на форум, чтобы купить',
	
	'IK_ITEM_CONFIRM_BUY'	=> 'Вы уверены, что хотите купить услугу <strong>%1$s</strong>: %2$s ед. за %3$s?',
	'IK_ITEM_CONFIRM_TRASH'	=> 'Вы действительно желаете выбросить услугу <strong>%1$s</strong>?',
	'IK_ITEM_CONFIRM_USE'	=> 'Вы уверены, что хотите использовать услугу <strong>%1$s</strong>?',
    'IK_ITEM_CONFIRM_CANCEL'=> 'Вы уверены, что хотите отменить услугу <strong>%1$s</strong>?',
	'IK_ITEM_BOUGHT'		=> 'Вы купили услугу <strong>%s</strong>.',
	'IK_ITEM_BOUGHT_UNUSED'	=> 'Вы купили <strong>%s</strong>.<br /><br /><strong>Для использования услуги пройдите в Личный раздел<strong>.',
    'IK_ITEM_NOW_USE'       => 'Вы использовали услугу <strong>%s</strong>.',
    'IK_TOPICS_FOR_SELECTION_NOT_FOUND' => 'У Вас нет тем в разрешенных для данной услуги форумах!',
	
    'IK_REDIRECT_TO_UCP'	=> '%1s Перейти в Личный раздел.%2s',

	'IK_PREBUY_ERROR'		=> 'Ошибка при бронировании услуги. Попробуйте повторить покупку или обратитесь к Администратору',

	'IK_TOTAL_USER_ITEMS'	=> 'Количество услуг: %1$s',
	'IK_ITEM_NAME'			=> 'Название услуги',
	'IK_ITEM_DESCRIPTION'	=> 'Описание услуги',
	'IK_ITEM_QUANTITY'		=> 'Количество',
	'IK_ITEM_PRICE'			=> 'Цена',
	'IK_TIME_EXPIRE'		=> 'Период действия (в часах)',
    'IK_EXPIRE'             => 'Действует до:',
	'IK_ITEM_QUANTITY_AVAILABLE'=> 'Количество',
	'IK_ITEM_ACTIONS'		=> 'Действие',

    

    'IK_ITEM_CONFIRM_SELECT_TOPIC'  => 'Выберите тему для применения услуги:',
    'IK_ITEM_CONFIRM_CANCEL_TOPIC'  => ' для темы "%1$s"',
    'IK_ITEM_CONFIRM_SELECT_FORUM'  => 'Выберите форум для применения услуги:',
    'IK_ITEM_CONFIRM_CANCEL_FORUM'  => ' для форума "%1$s"',
	
	'IK_ITEM_BUY'			=> 'Купить',
	'IK_ITEM_BUY_USE'		=> 'Купить и использовать',
    'IK_ITEM_USE'           => 'Использовать',
    'IK_ITEM_TRASH'         => 'Выбросить',
    'IK_ITEM_CANCEL'        => 'Отменить',
    'IK_ITEM_PROLONGATION'   => 'Пролонгировать',
    
	'IK_SOLD_OUT'			=> 'Нет в наличие',
	
	'IK_PAY_TITLE'			=> 'Оплата',
	'IK_PAY_TEXT'			=> 'Сейчас Вам необходимо перейти на портал сервиса Interkassa для оплаты купленной услуги',
	'IK_PAY'				=> 'Перейти',
	
	'IK_WRONG_SHOP_ID'		=> 'Неверный идентификатор продавца. Сообщите об этом Администратору',
	'IK_UNKNOWN_PAYMENT_STATE'	=> 'Неизвестный ответ сервиса Interkassa. Сообщите об этом Администратору',
	'IK_WRONG_SIGN_HASH'	=> 'Проверка контрольной подписи данных о платеже провалена! Сообщите об этом Администратору',
	'IK_CANCEL_PAYMENT'		=> 'Ваш платеж еще обрабатывается.',
	'IK_CRITICAL_ERROR'		=> 'Произошла критическая ошибка при выполнении платежа. Сообщите об этом Администратору',
	'IK_PAYMENT_COMPLETE'	=> 'Оплата прошла успешно!',
	'IK_PAYMENT_UNCOMPLETE'	=> 'Оплата еще не завершена!',
    'IK_PAYMENT_ALREADY_COMPLETE'=> 'Указанная услуга уже ранее оплачена!',

	'IK_BUY_ITEM_FULL'	=> 'Покупка услуги %1$s пользователем %2$s',
	
	'IK_SHOP_AD_TITLE'	=> '^ Моментальное размещение вашей ссылки здесь всего за %1$s! ^',
	'IK_SHOP_AD_TITLE1'	=> 'Разместите свою рекламу прямо сейчас — это очень просто и удобно. Вам понравится!',
	
	'IK_ITEM_ENDING_PM_NOTIFY_SUBJECT'	=> 'Напоминание! Заканчивается дополнительная услуга!',
	'IK_ITEM_ENDING_PM_NOTIFY_BODY'	=> 'Доброго времени суток! <br /> Напоминаем, что дополнительная услуга <strong>%1$s</strong> закончится в <strong>%2$s</strong>!<br /><br />Более детально о статусах своих дополнительных услуг Вы можете ознакомиться в Личном разделе -> Дополнительные услуги -> <a href="%3$s">Статистика</a><br /><br />Сообщение сформировано автоматически и отвечать на него не нужно.',	
	
));

?>
