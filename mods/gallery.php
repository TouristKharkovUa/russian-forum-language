<?php
/**
*
* gallery.php [Russian] (Pthelovod, TomAlex v1.1.4)
*
* @package phpBB Gallery 
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
  	'ADD_UPLOAD_FIELD'		    		=> 'Добавить поле загрузки',
	'ALBUM'								=> 'Галерея с альбомами и под-альбомы ',
	'ALBUM_IS_CATEGORY'		    		=> 'Вы обращаетесь не к альбому, а к категории.<br />Вы не можете загружать в категорию.',
	'ALBUM_LOCKED'				    	=> 'Альбом закрыт',
	'ALBUM_NAME'			    		=> 'Имя альбома',
	'ALBUM_NOT_EXIST'					=> 'Запрошенного альбома не существует.',
	'ALBUM_PERMISSIONS'					=> 'Права доступа',
	'ALBUM_REACHED_QUOTA'				=> 'Вы больше не можете загрузить изображения в альбом, т.к. достигнут лимит на количество изображений. Можете связаться с администрацией для получения подробной информации.',
	'ALBUM_UPLOAD_NEED_APPROVAL'		=> 'Ваши изображения успешно загружены.<br /><br />Они должны быть одобрены администратором или модератором, только после этого они будут показаны.',
	'ALBUM_UPLOAD_NEED_APPROVAL_ERROR'	=> 'Некоторые из ваших изображений загружены успешно.<br /><br />Но загруженные изображения должны быть одобрены администраторами или модераторами перед тем, как появятся на странице фотоальбома.<br /><br /><p class="error">%s</p>',
	'ALBUM_UPLOAD_SUCCESSFUL'			=> 'Ваши изображения успешно загружены',
	'ALBUM_UPLOAD_SUCCESSFUL_ERROR'	    => 'Некоторые из ваших изображений загружены успешно.<br /><br /><span class="error">%s</span>',
	'ALBUMS_MARKED'					    => 'Все альбомы будут отмечены как прочтенные.',
	'ALL'						    	=> 'Все',
	'ALL_IMAGES'			    		=> 'Все изображения',
	'ALLOW_COMMENTS'			    	=> 'Разрешить добавлять комментарии к этому изображению.',
	'ALLOW_COMMENTS_ARY'		    	=> array(
		0	=> 'Разрешить добавлять комментарии к этому изображению.',
		2	=> 'Разрешить добавлять комментарии к этим изображениям.',
	),
	'ALLOWED_FILETYPES'		    		=> 'Разрешенные типы файлов',
	'APPROVE'				    		=> 'Одобрить',
	'APPROVE_IMAGE'				    	=> 'Одобрить изображение',

	//@todo
	'ALBUM_COMMENT_CAN'					=> 'Вы <strong>можете</strong> оставлять комментарии к изображениям в этом альбоме',
	'ALBUM_COMMENT_CANNOT'				=> 'Вы <strong>не можете</strong> оставлять комментарии к изображениям в этом альбоме',
	'ALBUM_DELETE_CAN'					=> 'Вы <strong>можете</strong> удалять свои изображения в этом альбоме',
	'ALBUM_DELETE_CANNOT'				=> 'Вы <strong>не можете</strong> удалять свои изображения в этом альбоме',
	'ALBUM_EDIT_CAN'					=> 'Вы <strong>можете</strong> редактировать свои изображения в этом альбоме',
	'ALBUM_EDIT_CANNOT'					=> 'Вы <strong>не можете</strong> редактировать свои изображения в этом альбоме',
	'ALBUM_RATE_CAN'					=> 'Вы <strong>можете</strong> оценивать изображения в этом альбоме',
	'ALBUM_RATE_CANNOT'					=> 'Вы <strong>не можете</strong> оценивать изображениям в этом альбоме',
	'ALBUM_UPLOAD_CAN'					=> 'Вы <strong>можете</strong> загружать новые изображения в этот альбом',
	'ALBUM_UPLOAD_CANNOT'				=> 'Вы <strong>не можете</strong> загружать новые изображения в этот альбом',
	'ALBUM_VIEW_CAN'					=> 'Вы <strong>можете</strong> просматривать изображения в этом альбоме',
	'ALBUM_VIEW_CANNOT'					=> 'Вы <strong>не можете</strong> просматривать изображения в этом альбоме',

	'BAD_UPLOAD_FILE_SIZE'			=> 'Загружаемый Вами файл слишком большой',
	'BBCODES'						=> 'BBCodes',
	'BROWSING_ALBUM'				=> 'Пользователи, просматривающие этот альбом: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Пользователи, просматривающие этот альбом: %1$s и %2$d гость',
	'BROWSING_ALBUM_GUESTS'			=> 'Пользователи, просматривающие этот альбом: %1$s и %2$d гостей',

	'CHANGE_AUTHOR'					=> 'Изменение автора',
	'CHANGE_IMAGE_STATUS'			=> 'Изменить статус изображения',
	'CHARACTERS'					=> 'символов',
	'CLICK_RETURN_ALBUM'			=> 'Нажмите %sздесь%s для возврата в альбом',
	'CLICK_RETURN_IMAGE'			=> 'Нажмите %sздесь%s для возврата к изображению',
	'CLICK_RETURN_INDEX'			=> 'Нажмите %sздесь%s для возврата на главную',
	'COMMENT'						=> 'Комментарий',
	'COMMENT_IMAGE'					=> 'Оставить комментарий к этому изображению в альбоме %s',
	'COMMENT_LENGTH'				=> 'Введите здесь Ваш комментарий (не более <strong>%d</strong> символов).',
	'COMMENT_ON'					=> 'Комментарий',
	'COMMENT_STORED'				=> 'Ваш комментарий успешно сохранен.',
	'COMMENT_TOO_LONG'				=> 'Ваш комментарий слишком длинный.',
	'COMMENTS'						=> 'Комментарии',
	'COMMENTS_INDIV'				=> 'Комментарии к выложенной работе. Не забудьте выбрать и поставить свою оценку.',
	'CONTEST_COMMENTS_STARTS'		=> 'Комментарии к снимкам в этом конкурсе разрешены с %s.',
	'CONTEST_ENDED'					=> 'Конкурс завершился %s.',
	'CONTEST_ENDS'					=> 'Конкурс завершается %s.',
	'CONTEST_RATING_STARTED'		=> 'Голосование для этого конкурса началось %s.',
	'CONTEST_RATING_STARTS'			=> 'Голосование для этого конкурса начнется %s.',
	'CONTEST_RATING_ENDED'			=> 'Голосование для этого конкурса закончилось %s.',
	'CONTEST_RATING_HIDDEN'			=> 'скрыто',
	'CONTEST_RESULT'				=> 'Конкурс',
	'CONTEST_RESULT_1'				=> 'Победитель',
	'CONTEST_RESULT_2'				=> 'Второй',
	'CONTEST_RESULT_3'				=> 'Третий',
	'CONTEST_RESULT_HIDDEN'			=> 'Рейтинг этого изображения скрыт до завершения конкурса %s.',
	'CONTEST_STARTED'				=> 'Конкурс начался %s.',
	'CONTEST_STARTS'				=> 'Конкурс начинается %s.',
	'CONTEST_USERNAME'				=> '<strong>Конкурс</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Конкурс</strong> » Имя пользователя скрыто до окончания конкурса %s.',
  	'CONTEST_IMAGE_DESC'			=> '<strong>Конкурс</strong> » Характеристики и описание изображений скрыты до окончания конкурса %s.',
	'CONTEST_WINNERS_OF'			=> 'Победитель конкурса “%s”',
	'CONTINUE'						=> 'Продолжение',
	
	'DATABASE_NOT_UPTODATE'			=> 'Данные о версии в Базе Данных не сходятся с данными в файлах. Пожалуйста, обновите данные о версии в Базе Данных.',
	'DELETE_COMMENT'				=> 'Удалить комментарий',
	'DELETE_COMMENT2'				=> 'Удалить комментарий?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Вы уверенны, что хотите удалить комментарий?',
	'DELETE_IMAGE'					=> 'Удалить',
	'DELETE_IMAGE2'					=> 'Удалить изображение?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Вы уверенны, что хотите удалить изображение?',
	'DELETED_COMMENT'				=> 'Комментарий удален',
	'DELETED_COMMENT_NOT'			=> 'Комментарий не удален',
	'DELETED_IMAGE'					=> 'Изображение удалено',
	'DELETED_IMAGE_NOT'				=> 'Изображение не удалено',
	'DESC_TOO_LONG'					=> 'Описание к изображению слишком длинное',
	'DESCRIPTION_LENGTH'			=> 'Введите здесь описание к изображению (не более <strong>%d</strong> символов).',
	'DETAILS'						=> 'Подробности',
	'DONT_RATE_IMAGE'				=> 'Вами не сделана оценка изображения (выбрать при желании)',

	'EDIT_COMMENT'					=> 'Редактировать комментарий',
	'EDIT_IMAGE'					=> 'Редактировать',
	'EDITED_TIME_TOTAL'				=> 'Последний раз редактировалось пользователем %s, время %s; всего редактировалось раз: %d',
	'EDITED_TIMES_TOTAL'			=> 'Последний раз редактировалось пользователем %s, время %s; всего редактировалось раз: %d',

	'FAVORITE_IMAGE'				=> 'Добавить в избранные',
	'FAVORITED_IMAGE'				=> 'Изображение добавлено в избранные.',
	'FILE'							=> 'Файл',
	'FILE_SIZE'						=> 'Размер файла',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Тип файла "<strong>%1$s</strong>" не соответствует mime-типу (%2$s).',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',
	'FILETYPES_ZIP'					=> 'zip',
	
	'IGNORE_NOTUPTODATE_MESSAGE'		=> 'Напомнить через 7 дней',
	'IMAGE'								=> 'Изображение',
	'IMAGE_#'							=> '1 изображение',
	'IMAGE_ALREADY_REPORTED'			=> 'Изображение уже обжаловано.',
	'IMAGE_BBCODE'						=> 'BBCode изображения',
	'IMAGE_COMMENTS_DISABLED'			=> 'Возможность комментировать данное изображение отключено автором.',
	'IMAGE_DAY'							=> '%.2f изображений в день',
	'IMAGE_DESC'						=> 'Авторское описание изображения',
	'IMAGE_HEIGHT'						=> 'Высота изображения',
	'IMAGE_INSERTED'					=> 'Изображение вставлено',
	'IMAGE_LOCKED'						=> 'Изображение заблокированно. Вы не можете оставлять к нему комментарии.',
	'IMAGE_NAME'						=> 'Название изображения',
	'IMAGE_NOT_EXIST'					=> 'Изображение не найдено.',
	'IMAGE_PCT'							=> '%.2f%% из всех изображений',
	'IMAGE_STATUS'						=> 'Статус',
	'IMAGE_URL'							=> 'URL изображения',
	'IMAGE_WIDTH'						=> 'Ширина изображения',
	'IMAGES_#'							=> '%s изображений',
	'IMAGES_REPORTED_SUCCESSFULLY'		=> 'Изображение обжаловано',
	'IMAGES_UPDATED_SUCCESSFULLY'		=> 'Информация об изображении успешно обновлена',
	'INSERT_IMAGE_POST'					=> 'Нажать и вставить',
	'INVALID_USERNAME'					=> 'Неверное имя пользователя',

	'LAST_COMMENT'					=> 'Последний комментарий',
	'LAST_IMAGE'					=> 'Последнее изображение',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Вы должны быть зарегистрированы и выполнить вход для загрузки изображений в этот альбом.',

	'MARK_ALBUMS_READ'				=> 'Отметить просмотренными',
	'MAX_DIMENSIONS'				=> 'Максимальные размеры',
	'MAX_FILE_SIZE'					=> 'Максимальный размер файла (байт)',
	'MAX_HEIGHT'					=> 'Максимальная высота (точек-px)',
	'MAX_WIDTH'						=> 'Максимальная ширина (точек-px)',
	'MISSING_COMMENT'				=> 'Не введено сообщение',
	'MISSING_IMAGE_NAME'			=> 'Необходимо указать уникальное имя изображения.',
	'MISSING_MODE'					=> 'Не выбран режим',
	'MISSING_REPORT_REASON'			=> 'Укажите причину жалобы.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Не найден слайдшоу-плагин. Свяжитесь с администратором конференции для дополнительной информации.',
	'MISSING_SUBMODE'				=> 'Не выбран подрежим.',
	'MISSING_USERNAME'				=> 'Не введено имя пользователя',
	'MOVE_TO_ALBUM'					=> 'Выбрать альбом для перемещения',
	'MOVE_TO_PERSONAL'				=> 'Выбрать персональный альбом',
	'MOVE_TO_PERSONAL_MOD'			=> 'Если этот параметр установлен, то изображение будет помещено в персональный альбом пользователя. Если пользователь не имеет персонального альбома, он создается автоматически.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Если этот параметр установлен, то изображение будет помещено в Ваш персональный альбом. Если у Вас нет персонального альбома, он создается автоматически.',

	'NEW_COMMENT'					=> 'Новый комментарий',
	'NEW_IMAGES'					=> 'Новое изображение',
	'NEWEST_PGALLERY'				=> 'Новая созданная персональная галерея %s',
	'NO_ALBUMS'						=> 'У Вас возможно нет прав для просмотра альбомов в галерее. Зарегистрируйтесь пожалуйста.',
	'NO_COMMENTS'					=> 'Комментариев ещё нет',
	'NO_IMAGES'						=> 'Нет изображений',
	'NO_IMAGES_FOUND'				=> 'Изображения не найдены.',
	'NO_NEW_IMAGES'					=> 'Нет новых изображений',
	'NO_IMAGES_LONG'				=> 'Закрыт доспут для просмотра фотографий в этой категории или альбом еще не заполнен.',
	'NOT_ALLOWED_FILE_TYPE'			=> 'Этот тип файла не допустим',
	'NOT_RATED'						=> 'не оценено.',

	'ORDER'							=> 'Порядок',
	'ORIG_FILENAME'					=> 'Взять имя файла в качестве имени изображения',
	'OUT_OF_RANGE_VALUE'			=> 'Значение превышает допустимые рамки',
	'OWN_IMAGES'					=> 'Ваши изображения',

	'PERCENT'						=> '%',
	'PERSONAL_ALBUMS'				=> 'Персональные альбомы в галерее',
	'PIXELS'						=> 'пиксели',
	'PLUGIN_CLASS_MISSING'			=> 'Ошибка плагина галереи: Тип „%s“ не найден!',
	'POST_COMMENT'					=> 'Здесь можно оставить свой комментарий',
	'POST_COMMENT_RATE_IMAGE'		=> 'Оставить комментарий и оценить изображение',
	'POSTER'						=> 'Автор',

	'QUOTA_REACHED'					=> 'Достигнуто ограничение на количество загрузок.',
	'QUOTE_COMMENT'					=> 'Цитата комментария',
	
	'RANDOM_IMAGES'					=> 'Случайное изображение',
	'RATE_IMAGE'					=> 'Оценить изображение',
	'RATES_COUNT'					=> 'Количество оценок',
	'RATING'						=> 'Оценок',
	'RATING_STRINGS'				=> array(
		0	=> 'нет оценок',
		1	=> '%2$s (1 оценка)',
		2	=> '%2$s (%1$s оценок)',
	),
	'RATING_STRINGS_USER'			=> array(
		1	=> '%2$s (1 оценка, ваша оценка: %3$s)',
		2	=> '%2$s (%1$s оценок, ваша оценка: %3$s)',
	),
	'RATING_SUCCESSFUL'				=> 'Избражение оценено успешно.',
	'READ_REPORT'					=> 'Читать жалобу',
	'RECENT_COMMENTS'				=> 'Последние комментарии сделанные в галерее форума',
	'RECENT_IMAGES'					=> 'Последние изображения загруженные в галерею форума',
	'REPORT_IMAGE'					=> 'Обжаловать изображение',
	'RETURN_ALBUM'					=> '%sВернуться в альбом%s',
	'ROTATE_IMAGE'					=> 'Вращение изображения',
	'ROTATE_LEFT'					=> '90° против часовой',
	'ROTATE_NONE'					=> 'нет',
	'ROTATE_RIGHT'					=> '90° по часовой',
	'ROTATE_UPSIDEDOWN'				=> '180°',
	
	'SEARCH_ALBUM'					=> 'Искать в этом альбоме…',
	'SEARCH_ALBUMS'					=> 'Искать в альбомах',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Выберите один или несколько альбомов, в которых будет произведен поиск. Поиск во вложенных альбомах производится автоматически, если вы не отключили соответствующую опцию ниже.',
	'SEARCH_COMMENTS'				=> 'Только комментарии',
	'SEARCH_CONTEST'				=> 'Победители конкурса',
	'SEARCH_IMAGE_COMMENTS'			=> 'Названия изображений, описания и комментарии',
	'SEARCH_IMAGE_VALUES'			=> 'Названия изображений и описания',
	'SEARCH_IMAGENAME'				=> 'Названия изображений',
	'SEARCH_RANDOM'					=> 'Случайные изображения',
	'SEARCH_RECENT'					=> 'Последние изображения',
	'SEARCH_RECENT_COMMENTS'		=> 'Последние комментарии',
	'SEARCH_SUBALBUMS'				=> 'Поиск во вложенных альбомах',
	'SEARCH_TOPRATED'				=> 'Наиболее оцененные изображения',
	'SEARCH_USER_IMAGES'			=> 'Показать изображения пользователя',
	'SEARCH_USER_IMAGES_OF'			=> 'Изображения %s',
	'SELECT_ALBUM'					=> 'Выбрать альбом',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Показать персональный альбом %s',
	'SLIDE_SHOW'					=> 'Слайдшоу',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Чтобы начать слайдшоу, нажмите на название одной из картинок, а затем нажмите на иконку "Пуск":',
	'SLIDE_SHOW_LYTEBOX'			=> 'Чтобы начать слайдшоу, нажмите на название одной из картинок:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Чтобы начать слайдшоу, нажмите на название одной из картинок:',
	'SORT_ASCENDING'		    	=> 'По возрастанию',
	'SORT_DEFAULT'					=> 'По умолчанию',
	'SORT_DESCENDING'			    => 'По убыванию',
	'STATUS'					    => 'Статус',
	'SUBALBUMS'						=> 'вложенные альбомы',
	'SUBALBUM'						=> 'вложенный альбом',	
	
	'THUMBNAIL_SIZE'			    => 'Размер миниатюры (точек-px)',
	'TOTAL_COMMENTS_OTHER'			=> 'Всего комментариев <strong>%d</strong>',
	'TOTAL_COMMENTS_ZERO'			=> 'Всего комментариев <strong>0</strong>',
	'TOTAL_IMAGES'					=> 'Всего изображений',
	'TOTAL_PGALLERIES_OTHER'		=> 'Всего персональных галерей <strong>%d</strong>',
	'TOTAL_PGALLERIES_SHORT'		=> '%d персональных галерей ',
	'TOTAL_PGALLERIES_ZERO'			=> 'Всего персональных галерей <strong>0</strong>',

	'UNFAVORITE_IMAGE'				=> 'Удалить из избранного',
	'UNFAVORITED_IMAGE'				=> 'Изображение удалено из избранного.',
	'UNFAVORITED_IMAGES'			=> 'Изображения удалены из избранного.',
	'UNLOCK_IMAGE'					=> 'Разблокировать изображение',
	'UNWATCH_ALBUM'					=> 'Отписаться от альбома',
	'UNWATCH_IMAGE'					=> 'Отписаться от изображения',
	'UNWATCH_PEGAS'					=> 'Не подписываться на вновь создаваемые фотоальбомы',
	'UNWATCHED_ALBUM'				=> 'Вы больше не будете получать сообщения о новых изображениях в этом альбоме.',
	'UNWATCHED_ALBUMS'				=> 'Вы больше не будете получать сообщения о новых изображениях в этих альбомах.',
	'UNWATCHED_IMAGE'				=> 'Вы больше не будете получать сообщения о новых комментариях к этому изображению.',
	'UNWATCHED_IMAGES'				=> 'Вы больше не будете получать сообщения о новых комментариях к этим изображениям.',
	'UNWATCHED_PEGAS'				=> 'Вы больше не подписаны на сообщения о создании новых персональных альбомов.',
	'UPLOAD_ERROR'					=> 'При загрузке “%1$s” произошла следующая ошибка:<br />&raquo; %2$s',
	'UPLOAD_IMAGE'					=> 'Загрузить изображение',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'		=> 'Разрешение Вашего изображения слишком велико',
	'UPLOAD_NO_FILE'				=> 'Вы должны ввести путь и имя файла',
	'UPLOADED_BY_USER'				=> 'Загружено (пользователь)',
	'UPLOADED_ON_DATE'				=> 'Загружено (дата)',
	'USE_SAME_NAME'					=> 'Использовать одинаковые названия изображения и описания для всех изображений.',
	'USE_NUM'						=> 'Автоматически увеличивать нумерацию. Начать нумерацию с:',
	'USER_REACHED_QUOTA'			=> array(
		0	=> 'Вы не можете загрузить <strong>ни одного</strong> изображения.<br />Пожалуйста обратитесь к администрации за разьяснениями.',
		1	=> 'Вы не можете загрузить более <strong>1</strong> изображения.<br />Пожалуйста обратитесь к администрации за разьяснениями.',
		2	=> 'Вы не можете загрузить более <strong>%s</strong> изображений.<br />Пожалуйста обратитесь к администрации за разьяснениями.',
	),
	'USER_REACHED_QUOTA_SHORT'		=> array(
		0	=> 'Вы не можете загрузить <strong>ни одного</strong> изображения.',
		1	=> 'Вы не можете загрузить более <strong>1</strong> изображения.',
		2	=> 'Вы не можете загрузить более <strong>%s</strong> изображений.',
	),
	'USERNAME_BEGINS_WITH'			=> 'Имя пользователя начинается с',
	'USERS_PERSONAL_ALBUMS'			=> 'Персональные альбомы пользователей',

	'VIEW_ALBUM'					=> 'Просмотр альбома',
	'VIEW_ALBUM_IMAGE'				=> '1 изображение',
	'VIEW_ALBUM_IMAGES'				=> '%s изображений',
	'VIEW_IMAGE'					=> 'Просмотр изображения',
	'VIEW_LATEST_IMAGE'				=> 'Просмотр последнего изображения',
	'VIEW_SEARCH_RECENT'			=> 'Последние изображения',
	'VIEW_SEARCH_RANDOM'			=> 'Случайные изображения',
	'VIEW_SEARCH_COMMENTED'			=> 'Последние комментарии',
	'VIEW_SEARCH_CONTESTS'			=> 'Победители конкурсов',
	'VIEW_SEARCH_TOPRATED'			=> 'Топ-лист оценок',
	'VIEW_SEARCH_SELF'				=> 'Мои изображения',
	'VIEWING_ALBUM'					=> 'Просмотр альбома %s',
	'VIEWING_IMAGE'					=> 'Просмотр изображений из альбома %s',
	'VIEWS'							=> 'Просмотров',
	
	'WATCH_ALBUM'					=> 'Подписка на альбом',
	'WATCH_IMAGE'					=> 'Подписка на изображение',
	'WATCH_PEGAS'					=> 'Подписка на новые персональные альбомы',
	'WATCHING_ALBUM'				=> 'Теперь Вы будете получать уведомления о новых изображениях в этом альбоме.',
	'WATCHING_IMAGE'				=> 'Теперь Вы будете получать уведомления о новых комментариях к этому изображению.',
	'WATCHING_PEGAS'				=> 'Теперь Вы будете получать уведомления о новых персональных альбомах пользователей.',
	
	'YOUR_COMMENT'					=> 'Оставленный комментарий',
	'YOUR_PERSONAL_ALBUM'			=> 'Ваш персональный альбом',
	'YOUR_RATING'					=> 'Ваша оценка',
));

?>