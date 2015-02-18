<?php
/**
*  info_ACP_IK.php Pazh
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
	'ACP_INTERKASSA'					=> 'Interkassa',

	//Mode
	'ACP_IK_SETTINGS'			=> 'Конфигурация',
	'ACP_IK_SETTINGS_EXPLAIN'	=> 'Здесь Вы можете настроить парамерты для работы с сервисом Interkassa',
	'ACP_IK_ITEMS'				=> 'Услуги',
	'ACP_IK_SETTINGS_EXPLAIN'	=> 'Здесь Вы можете настроить парамерты для работы с сервисом Interkassa',

	//Configuration
	'ACP_IK_ENABLE'				=> 'Включить Interkassa',
	'ACP_IK_ENABLE_EXPLAIN'		=> 'Включить прием оплаты через сервис Interkassa',
	'ACP_IK_SHOP_ID'			=> 'Идентификатор магазина',
	'ACP_IK_SHOP_ID_EXPLAIN'	=> 'Идентификатор магазина зарегистрированного в системе «INTERKASSA» на который был совершен платеж.<br />'.
										   '<i>Пример: 64C18529-4B94-0B5D-7405-F2752F2B716C</i>',
	'ACP_IK_SECRET_KEY'			=> 'Ваш текущий секретный ключ (secret_key) ',
	'ACP_IK_SECRET_KEY_EXPLAIN'	=> 'Секретный ключ – это строка символов, добавляемая к реквизитам платежа, высылаемым продавцу вместе с оповещением. Предназначен для проверки и формирования подписи данных.<br />'.
										   'Эта строка используется для повышения надежности идентификации высылаемого оповещения. Содержание строки известно только сервису IKI и продавцу!<br />'.
										   '<strong>Секретный ключ хранить обязательно в строгой секретности!</strong>',
	'ACP_IK_CURRENCY'			=> 'Валюта',
    'ACP_IK_SHOP_AUTOBUMP'      => 'Интервал автоподъема тем',
    'ACP_IK_SHOP_AUTOBUMP_EXPLAIN'  => 'Укажите интервал автоподъема тем в часах.',
	'ACP_IK_SHOP_STICKY'		=> 'Кол-во прикрепленных тем',
	'ACP_IK_SHOP_STICKY_EXPLAIN'=> 'Укажите максимальное кол-во прикрепленных тем в одном форуме',
	'ACP_IK_SHOP_PM_NOTIFY'			=> 'Напоминание в ЛС',
	'ACP_IK_SHOP_PM_NOTIFY_EXPLAIN'	=> 'Включить напоминание пользователей о приближающемся завершении услуг (за 1 сутки до завершения).',
	
	//Items
	'ACP_IK_ITEM_SETTINGS'				=> 'Настройки Услуги',
	'ACP_IK_ITEM_NAME'					=> 'Название услуги',
	'ACP_IK_ITEM_NAME_EXPLAIN'			=> 'Введите название Услуги (max 100 символов)',
	'ACP_IK_ITEM_DESCRIPTION'			=> 'Описание',
	'ACP_IK_ITEM_DESCRIPTION_EXPLAIN'	=> 'Описание Услуги(max 255 символов)',
	'ACP_IK_ITEM_PLUGIN'				=> 'Плагин',
	'ACP_IK_ITEM_PLUGIN_EXPLAIN'		=> 'Выберите плагин, в котором описан функционал Услуги',
	'ACP_IK_ITEM_PRICE'					=> 'Цена',
	'ACP_IK_ITEM_QUANTITY'				=> 'Количество',
	'ACP_IK_ITEM_QUANTITY_EXPLAIN'		=> 'Введите здесь количество Услуг, который будет находятся в продаже. Количество будет уменьшаться с каждой покупкой. <br />Укажите 0 для бесконечного кол-ва',
	'ACP_IK_TIME_EXPIRE'				=> 'Время действия Услуги',
	'ACP_IK_TIME_EXPIRE_EXPLAIN'		=> 'Время действия Услуги указывается в <b>ЧАСАХ</b>. Оставьте 0 для действия постояно',
	'ACP_IK_FORUM_LIST'					=> 'Список форумов',
	'ACP_IK_FORUM_LIST_EXPLAIN'			=> 'Выберите форумы для которых будет распространяться данная Услуга. Выбор форума АВТОМАТИЧЕСКИ распространиет действие услуги на его подфорумы.',
    
    //Item Status
    'ACP_IK_ITEM_-2'    => 'Отменена',
    'ACP_IK_ITEM_-1'    => 'Удалена',
    'ACP_IK_ITEM_0'     => 'Не использована',
    'ACP_IK_ITEM_1'     => 'Использована',
    'ACP_IK_ITEM_2'     => 'Завершилась',	

	'ACP_IK_ITEM_MAN'					=> 'Управление Услугами',
	'ACP_IK_ITEM_MAN_EXPLAIN'			=> 'Здесь Вы можете добавлять новые и редактировать существующие Услуги.',
	
	'ACP_IK_EDIT_ITEM'					=> 'Редактировать Услугу',
	'ACP_IK_EDIT_ITEM_EXPLAIN'			=> 'Здесь Вы можете редактировать существующую Услугу.',
	'ACP_IK_ADD_ITEM'					=> 'Добавить Услугу',
	'ACP_IK_ADD_ITEM_EXPLAIN'			=> 'Здесь вы можете добавить новую Услугу.',
	'ACP_IK_ITEM_ADDED'					=> 'Услуга успешно добавлена',
	'ACP_IK_ITEM_DELETED'				=> 'Услуга удалёна',
	'ACP_IK_ITEM_UPDATED'				=> 'Услуга обновлёна',
	'ACP_IK_ID_NOT_FOUND'				=> 'Услуга не найдена',
	'ACP_IK_NO_ITEMS'					=> 'Нет доступных Услуг',
	'ACP_IK_EMPTY_ITEM_NAME'			=> 'Не указано название Услуги',
	'ACP_IK_EMPTY_ITEM_PLUGIN'			=> 'Не указан плагин Услуги',
	'ACP_IK_EMPTY_ITEM_PRICE'			=> 'Не указана цена Услуги',
 
	'ACP_IK_INCOMPLETE'				=> 'Незавершенные операции',
	'ACP_IK_OPERATION_COMPLETED_0'	=> 'Начало покупки',
	'ACP_IK_OPERATION_COMPLETED_1'	=> 'Покупка оплачена',
	'ACP_IK_OPERATION_COMPLETED_2'	=> 'Покупка завершена',
	'ACP_IK_OPERATION_COMPLETED_3'	=> 'Покупка отменена за неуплату',
	'ACP_IK_NO_INOPERATIONS'		=> 'Нет незавершенных операций',
	'ACP_IK_OPERATION_STATUS'		=> 'Статус операции',
	'ACP_IK_OPERATION_TIME'			=> 'Время операции',
	'ACP_IK_OPERATION_COMMENT'		=> 'Комментарий',
	'ACP_IK_OPERATION_CONFIRM'		=> 'Подтвердить',
	'ACP_IK_OPERATION_CONFIRM_ASK'	=> 'Вы подтверждаете покупку услуги "%1s" пользователем "%2s"?',
	'ACP_IK_OPERATION_CONFIRM_OK'	=> 'Покупка успешно завершена',
	'ACP_IK_OPERATION_NOT_FOUND'	=> 'Операция не найдена',
	
	
	'ACP_IK_STATS'                    => 'Статистика',
    'ACP_IK_STATS_TITLE'              => 'Статистика по услугам',
    'ACP_IK_ITEM_STATUS'              => 'Статус услуги',
    'ACP_IK_STATS_ITEM_DETAIL_TITLE'  => 'Детализация по услуге',
    'ACP_IK_STATS_USER_DETAIL_TITLE'  => 'Детализация по пользователю',
    'ACP_IK_USERS_STATS_TITLE'        => 'Статистика по пользователям',
    'ACP_IK_TIME_EXPIRE_DETAIL'       => 'Действительно до',	
    'ACP_IK_ACTIONS'       			  => 'Действия',	
	'ACP_IK_ITEM_CANCEL'		      => 'Вернуть',
	
	'ACP_IK_SINGLE'					=> '1 услуга',
	'ACP_IK_MULTI'					=> '%1$s услуг',

	'ACP_IK_ITEM_CONFIRM_DELETE'	=> 'Вы уверены, что хотите удалить Услугу: <strong>%s</strong>?',
	'ACP_IK_ITEM_CONFIRM_CANCEL'	=> 'Вы уверены, что хотите вернуть выбранную услугу?',
	
	'ACP_INTERKASSA_LOGS'			=> 'Лог сервиса',
	'ACP_INTERKASSA_LOGS_EXPLAIN'	=> '',
	
	'ACP_IK_LINK'			=> '<a href="%2$s">%1$s</a>',
	'ACP_IK_UI_ID'			=> 'ID услуги из Лога сервиса',
	
	// Log entries
	'LOG_IK_SETTINGS'		=> 'Настройки Interkassa обновлены',
	'LOG_IK_ITEMS_ADD'		=> 'Добавлена новая Услуга',
	'LOG_IK_ITEMS_EDIT'		=> 'Услуга успешно отредактирована',
	'LOG_IK_ITEMS_DELETE'	=> 'Услуга успешно удалена',

	'LOG_IK_PREBUY_ITEM'			=> '<strong>Начало покупки услуги:</strong><br /> %1$s',
	'LOG_IK_TRASH_ITEM'				=> '<strong>Удаление услуги:</strong><br /> %1$s',
	'LOG_IK_ADMIN_CANCEL_ITEM'		=> '<strong>Возврат услуги администратором:</strong><br /> "%1$s" пользователь "%2$s"',
	'LOG_IK_CANCEL_ITEM'			=> '<strong>Отмена услуги:</strong><br /> %1$s',
	'LOG_IK_END_ITEM'				=> '<strong>Завершение услуг:</strong><br /> %1$s',
	'LOG_IK_AUTOBUMP'				=> '<strong>Автоподъем темы:</strong><br /> %1$s',
	'LOG_IK_ACTIVATE_ITEM'			=> '<strong>Услуга использована</strong><br /> %1$s',
	'LOG_IK_ACTIVATE_ITEM_TOPIC'	=> '<strong>Услуга</strong> "%1$s" <strong>активирована</strong><br />Тема: %2$s',
	'LOG_IK_DEACTIVATE_ITEM'		=> '<strong>Услуга завершена</strong><br /> %1$s',
	'LOG_IK_DEACTIVATE_ITEM_TOPIC'	=> '<strong>Услуга</strong> "%1$s" <strong>завершена</strong><br />Тема: %2$s',
	
	'LOG_IK_PAYMENT_BUY_ITEM'		=> '<strong>Успешная покупка услуги:</strong><br /> %1$s',
	'LOG_IK_PAYMENT_DISABLE'		=> '<strong>Использование сервиса Interkassa отключено:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_WRONG_SHOP_ID'	=> '<strong>Неверный идентификатор продавца:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_WRONG_SIGN_HASH'=> '<strong>Проверка контрольной подписи данных о платеже провалена:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_CRITIKAL'		=> '<strong>Произошла критическая ошибка при выполнении платежа:</strong>  <br />%1$s',
	'LOG_IK_PAYMENT_SUCCESS'		=> '<strong>Оплата прошла успешно:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_FAIL'			=> '<strong>Оплата еще не завершена:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_UNKNOWN'		=> '<strong>Неизвестный ответ сервиса:</strong> <br />%1$s',
	'LOG_IK_PAYMENT_UNCOMPLETE'		=> 'Оплата еще не завершена!:</strong> <br />%1$s',
    'LOG_IK_PAYMENT_ALREADY_COMPLETE'=> 'Указанная услуга уже ранее оплачена!:</strong> <br />%1$s',
	'LOG_IK_ITEM_ID_NOT_FOUND'		=> 'Услуга не найдена:</strong> <br />%1$s',

	'LOG_IK_CRON'	=> 'CRON отработал',
));

?>