<?php
/**
*
* acp_mods [Russian]
*
* @package language
* @version $Id$
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'					=> 'Дополнительные изменения',
	'AM_MOD_ALREADY_INSTALLED'				=> 'Данная модификация уже установлена, поэтому продолжение установки невозможно.',
	'AM_MOD_NOT_INSTALLED'					=> 'AutoMOD обнаружил, что этот мод не был установлен, поэтому процесс не может быть продолжен',
	'AM_MANUAL_INSTRUCTIONS'				=> 'AutoMOD пересылает архивный файл на ваш компьютер, потому что конфигурация AutoMOD, файлы не могут быть автоматически записаны на ваш сайт. Вам следует извлечь файлы из архива и загрузить их на ваш сервер вручную, используя FTP или иным способом. Если вы не получили файл автоматически, нажмите %здесь%s.',
	'APPLY_THESE_CHANGES'					=> 'Применить эти изменения',
	'APPLY_TEMPLATESET'						=> 'к данному шаблону',
	'AUTHOR_EMAIL'							=> 'Электронный адрес автора',
	'AUTHOR_INFORMATION'					=> 'Сведения об авторе',
	'AUTHOR_NAME'							=> 'Имя автора',
	'AUTHOR_NOTES'							=> 'Примечания автора',
	'AUTHOR_URL'							=> 'Сайт автора',
	'AUTOMOD'								=> 'АвтоМод',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'Данная версия АвтоМода уже установлена. Удалите папку install.',
	'AUTOMOD_UNKNOWN_VERSION'				=> 'АвтоМод не может быть обновлён, поскольку не удалось определить версию, установленную в настоящее время. Устанавливаемая версия — %s.',
	'AUTOMOD_VERSION'						=> 'Версия АвтоМода',

	'CAT_INSTALL_AUTOMOD'					=> 'АвтоМод',
	'CHANGE_DATE'							=> 'Дата выпуска',
	'CHANGE_VERSION'						=> 'Номер версии',
	'CHANGES'								=> 'Изменения',
	'CHECK_AGAIN'							=> 'Проверить снова',
	'CLICK_HIDE_FILES' 						=> 'Нажмите, чтобы скрыть файлы без ошибок',
	'CLICK_HIDE_EDITS'						=> 'Нажмите, чтобы скрыть исправления без ошибок',
	'CLICK_SHOW_FILES' 						=> 'Нажмите для показа всех файлов',
	'CLICK_SHOW_EDITS' 						=> 'Нажмите для показа всех исправлений',
	'COMMENT'								=> 'Комментарий',
	'CREATE_TABLE'							=> 'Изменения в базе данных',
	'CREATE_TABLE_EXPLAIN'					=> 'АвтоМод успешно завершил внесение изменений в базу данных, включая право доступа, назначенное для шаблона «Администратор конференции».',

	'DELETE'								=> 'Удалить',
	'DELETE_CONFIRM'						=> 'Вы уверены, что хотите удалить данный МОД?',
	'DELETE_ERROR'							=> 'Ошибка удаления выбранного МОДа.',
	'DELETE_SUCCESS'						=> 'МОД был удалён.',
	'DIR_PERMS'					=> 'Права доступа к папкам',
	'DIR_PERMS_EXPLAIN'			=> 'На некоторых системах для корректной работы требуются определённые права доступа к папкам. По умолчанию значение прав доступа к папкам составляет 0755. Эта опция не имеет значение на платформах Windows.',
	'DIY_INSTRUCTIONS'			=> 'Дополнительные инструкции',
	'DEPENDENCY_INSTRUCTIONS'	=> 'Для устанавливаемой модификации требуется другая, ранее установленная модификация. АвтоМод не обнаружил требуемой модификации. Перед продолжением установки убедитесь в том, что модификация <strong><a href="%1$s">%2$s</a></strong> установлена.',
	'DESCRIPTION'				=> 'Описание',
	'DETAILS'					=> 'Подробности',

	'EDITED_ROOT_CREATE_FAIL'	=> 'АвтоМод не смог создать папку для сохранения изменяемых файлов.',
	'ERROR'						=> 'Ошибка',

	'FILE_EDITS'				=> 'Редактируемые файлы',
	'FILE_EMPTY'				=> 'Файл пустой',
	'FILE_MISSING'				=> 'Файл не найден',
	'FILE_PERMS'				=> 'Права доступа к файлам',
	'FILE_PERMS_EXPLAIN'		=> 'На некоторых системах для корректной работы требуются определённые права доступа к файлам. По умолчанию значение прав доступа к файлам составляет 0644. Эта опция не имеет значение на платформах Windows.',
	'FILE_TYPE'					=> 'Тип архивных файлов',
	'FILE_TYPE_EXPLAIN'			=> 'Эта опция работает только с методом «Загрузка архивного файла».',
	'FILESYSTEM_NOT_WRITABLE'	=> 'АвтоМод определил, что файловая система не перезаписываемая. Поэтому метод прямой записи файлов не может использоваться.',
	'FIND'						=> 'Найти',
	'FIND_MISSING'				=> 'Заданный аргумент поиска не найден',
	'FORCE_INSTALL'				=> 'Установить',
	'FORCE_CONFIRM'				=> 'При выборе принудительной установки модификация будет установлена не полностью. Вам будет необходимо вручную проделать некоторые изменения в файлах конференции. Продолжить?',
	'FORCE_UNINSTALL'			=> 'Отменить установку',
	'FTP_INFORMATION'			=> 'Сведения о FTP',
	'FTP_NOT_USABLE'			=> 'FTP не может использоваться, поскольку он отключён на вашем хосте.',
	'FTP_METHOD_ERROR'			=> 'Метод FTP не найден. Проверьте в настройках АвтоМода настройки метода FTP.',
	'FTP_METHOD_EXPLAIN'		=> 'Если вы испытывает проблемы с настройками "FTP" по умолчанию, вы можете попытаться использовать альтернативный метод соединения с сервером "Simple Socket".',
	'FTP_METHOD_FTP'			=> 'FTP',
	'FTP_METHOD_FSOCK'			=> 'Simple Socket',

	'GO_PHP_INSTALLER'  		=> 'МОД требует внешней инсталяции для окончания установки. Напжмите здесь для продолжения.',
	
	'INHERIT_NO_CHANGE'			=> 'Изменения не могут быть применены к данному файлу, поскольку шаблон %1$s зависит от %2$s.',
	'INLINE_FIND_MISSING'		=> 'Заданный аргумент поиска в строке не найден.',
	'INLINE_EDIT_ERROR'			=> 'Ошибка, во строенном редакторе файла MODX установки отсутствуют все необходимые элементы',
	'INSTALL_AUTOMOD'			=> 'Установка АвтоМода',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'Вы уверены, что хотите установить АвтоМод?',
	'INSTALL_DATE'   			=> 'Дата установки',
	'INSTALL_TIME'				=> 'Время установки',
	'INSTALL_MOD'				=> 'Установить модификацию',
	'INSTALL_ERROR'				=> 'Одно или более действий по установке не выполнено. Просмотрите ниже описание действий, попробуйте урегулировать проблемы и повторите попытку. Вы можете принудительно завершить установку, даже если некоторые действия не выполнены. <strong>Принудительное завершение установки не рекомендуется, поскольку может привести к неправильному функционированию конференции.</strong>',
	'INSTALL_FORCED'			=> 'Вы принудительно завершили установку модификации, несмотря на то, что некоторые действия не были корректно завершены. Ваша конференция может функционировать неправильно. Просмотрите ниже те действия, которые вызывали ошибки, и исправьте их вручную.',
	'INSTALLED'					=> 'Модификация установлена',
	'INSTALLED_EXPLAIN'			=> 'Модификация успешно установлена. Здесь вы можете просмотреть некоторые результаты установки. Отметьте ошибки и поищите поддержку на <a href="http://www.phpbb.com">phpBB.com</a>.',
	'INSTALLED_MODS'			=> 'Установленные модификации',
	'INSTALLATION_SUCCESSFUL'	=> 'АвтоМод успешно установлен. Теперь вы можете управлять модификациями phpBB в панели администрирования в разделе «AutoMOD».',
	'INVALID_MOD_INSTRUCTION'	=> 'Данная модификация имеет некорректную инструкцию или ошибочный аргумент поиска в строке.',
	'INVALID_MOD_NO_FIND'       => 'Не найдены требуемые действия ‘%s’',
	'INVALID_MOD_NO_ACTION'     => 'Не найдены требуемые вхождения поиска ‘%s’',
	
	'LANGUAGE_NAME'				=> 'Язык',

	'MANUAL_COPY'					=> 'Копирование не выполнено',
	'MOD_CONFIG'					=> 'Настройка АвтоМода',
	'MOD_CONFIG_UPDATED'			=> 'Настройки АвтоМода успешно изменены.',
	'MOD_DETAILS'					=> 'Подробности о модификации',
	'MOD_DETAILS_EXPLAIN'			=> 'Здесь вы можете просмотреть всю доступную информацию о выбранной модификации.',
	'MOD_MANAGER'					=> 'АвтоМод',
	'MOD_NAME'						=> 'Название модификации',
	'MOD_OPEN_FILE_FAIL'			=> 'АвтоМод не смог открыть файла «%s».',
	'MOD_UPLOAD'					=> 'Загрузить МОД',
	'MOD_UPLOAD_EXPLAIN'			=> 'Здесь вы можете загрузить архивный zip-файл, содержащий необходимын для установки файлы MODX.  AutoMOD попытается распаковать архив и подготовить установку.',
	'MOD_UPLOAD_INIT_FAIL'			=> 'Ошибка инициализации процесса загрузки МОДа.',
	'MOD_UPLOAD_SUCCESS'			=> 'МОД загружен и подготовлен к установке.',
	'MOD_UPLOAD_UNRECOGNIZED'		=> 'Структура каталогов загруженого архива Мода нераспознана. Проверьте загруженный архив, что не были повреждены или отсутствуют любые файлы / папки, или свяжитесь с автором Мода.',

	'AUTOMOD_INSTALLATION'			=> 'Установка AutoMOD',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Добро пожаловать в программу установки AutoMOD. Вам потребуются подробности относительно вашего FTP, если AutoMOD определит, что данный метод записи файлов будет наилучшим. Результаты тестирования отображены ниже.',

	'MODS_CONFIG_EXPLAIN'		=> 'С помощью этой страницы вы можете настроить то, как AutoMOD будет управлять файлами. Базовый метод заключается в загрузке архивного файла. Для использования других методов требуются дополнительные права на сервере.',
	'MODS_COPY_FAILURE'			=> 'Не удалось скопировать файл «%s». Проверьте права доступа или выберите иной метод записи.',
	'MODS_EXPLAIN'				=> 'С помощью этой страницы вы можете управлять доступными модификациями конференции. Модификации позволяют изменять функциональность конференции с помощью автоматической установки модификаций, созданных сообществом phpBB. Для получения дополнительной информации о модификациях и AutoMOD посетите <a href="http://www.phpbb.com/mods">сайт phpBB</a>. Для добавления модификации в этот список распакуйте её и загрузите распакованные файлы в папку <samp>/store/mods/</samp> на сервере.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD не смог передать по FTP файл «%s».',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD не смог соединится с вашим FTP-сервером. Ошибка %s',
	'MODS_MKDIR_FAILED'			=> 'Не удалось создать папку «%s».',
	'MODS_RMDIR_FAILURE'		=> 'Папка %s не может быть удалена',
	'MODS_RMFILE_FAILURE'		=> 'Файл %s не может быть удален',
	'MODS_NOT_WRITABLE'			=> 'Папка store/mods/ не доступна для записи. Это необходимо, чтобы функция загрузки модов работала правильно, если установлен метод записи по “FTP”.  Пожалуйста, измените ваши права или настройки и попробуйте еще раз.',
	'MODS_SETUP_INCOMPLETE'		=> 'Обнаружена проблема в конфигурации. АвтоМод не может функционировать. Возможно, некоторые настройки (например, имя пользователя FTP) были изменены, и должны быть скорректированы на странице настроек AutoMOD.',

	'NAME'						=> 'Название',
	'NEW_FILES'					=> 'Новые файлы',
	'NEED_READ_PERMISSIONS'		=> 'Некорректные права доступа: %s недоступно для чтения.',
	'NO_ATTEMPT'				=> 'Нет попыток',
	'NO_INSTALLED_MODS'			=> 'Установленных модификаций не найдено',
	'NO_MOD'					=> 'Выбранная модификация не найдена.',
	'NO_UNINSTALLED_MODS'		=> 'Неустановленных модификаций не найдено',
	'NO_UPLOAD_FILE'			=> 'Файл не выбран.',

	'ORIGINAL'					=> 'Оригинал',

	'PATH'						=> 'Путь',
	'PREVIEW_CHANGES'			=> 'Предварительный просмотр изменений',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'Опция включает и отключает отображение изменений перед фактическим выполнением инструкций.',
	'PRE_INSTALL'				=> 'Подготовка к установке',
	'PRE_INSTALL_EXPLAIN'		=> 'Здесь вы можете просмотреть все изменения, которые будут применены к файлам конференции после фактической установки модификации. <strong>Внимание:</strong> после применения изменений в базу данных будут внесены изменения, а файлы вашей конференции будут отредактированы в соответствии с инструкциями по установке модификации. Однако если процесс установки пройдёт неудачно, то AutoMOD предоставит опцию для восстановления проделанных им изменений.',
	'PRE_UNINSTALL'				=> 'Подготовка к деинсталляции',
	'PRE_UNINSTALL_EXPLAIN'		=> 'Здесь вы можете просмотреть все изменения, которые будут применены к файлам конференции после фактической деинсталляции модификации. <strong>Внимание:</strong> после применения изменений файлы вашей конференции будут отредактированы, и в базу данных также могут быть внесены изменения. Процесс деинсталляции противоположен процессу установки, и не может быть точен на 100 %. Однако если процесс деинсталляции пройдёт неудачно, то АвтоМод предоставит опцию для восстановления проделанных им изменений.',

	'REMOVING_FILES'	=> 'Файлы для удаления',
	'RETRY'				=> 'Повторить',
	'RETURN_MODS'		=> 'Вернуться в АвтоМод',
	'REVERSE'			=> 'Обратить изменения',
	'ROOT_IS_READABLE'	=> 'Корневая папка phpBB доступна для чтения.',
	'ROOT_NOT_READABLE'	=> 'АвтоМод не смог получить доступ для чтения к файлу index.php. Возможно, это следствие недостаточных прав доступа к корневой папке phpBB, что препятствует работе АвтоМод. Проверьте права доступа в корневой папке и повторите попытку.',

	'SORT_NAME'					=> 'Имя',
	'SORT_DATE'					=> 'Дата',
	'SOURCE'					=> 'Источник',
	'SQL_QUERIES'				=> 'SQL-запросы',
	'STATUS'					=> 'Состояние',
	'STORE_IS_WRITABLE'			=> 'Папка store доступна для записи.',
	'STORE_NOT_WRITABLE_INST'	=> 'Папка store недоступна для записи. Эта папка требуется для работы AutoMOD. Проверьте права доступа и повторите попытку.',
	'STORE_NOT_WRITABLE'		=> 'Папка store недоступна для записи.',
	'STYLE_NAME'				=> 'Название стиля',
	'SUCCESS'					=> 'Успешно',

	'TARGET'						=> 'Цель',
	'TARGET_VERSION'				=> 'phpBB target version',
	'UNKNOWN_MOD_AUTHOR-NOTES'		=> 'Нет примечаний автора.',
	'UNKNOWN_MOD_DESCRIPTION'		=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'	=> '', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'			=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'	=> '',
	'UNKNOWN_QUERY_REVERSE'			=> 'Неизвестный обратный запрос',
	'UNINSTALL'					=> 'Деинсталлировать',
	'UNINSTALL_AUTOMOD'			=> 'Деинсталяция АвтоМода',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'Вы уверены, что хотите деинсталировать АвтоМод? Это опция не удалит моды, установленные с помощью АвтоМода.',
	'UNINSTALLED'				=> 'Модификация деинсталлирована',
	'UNINSTALLED_MODS'			=> 'Неустановленные модификации',
	'UNINSTALLED_EXPLAIN'		=> 'Модификация успешно деинсталлирована. Здесь вы можете просмотреть некоторые результаты деинсталляции. Отметьте ошибки и поищите поддержку на <a href="http://www.phpbb.com">phpBB.com</a>.',
	'UNRECOGNISED_COMMAND'		=> 'Ошибка, нераспознанная команда %s',
	'UPDATE_AUTOMOD'			=> 'Обновление АвтоМода',
	'UPDATE_AUTOMOD_CONFIRM'	=> 'Подтвердите обновление АвтоМода.',
	'UPLOAD'					=> 'Загрузка',
	'VERSION'					=> 'Версия',
	'VERSION_WARNING'			=> 'Целевая версия phpBB для данного Мода %1$s, но ваша версия %2$s. Даже в случае успешной установки Мод может работать неправильно, или может повредить ваш форум. Пожалуйста уточните у автора, что данная версия Мода совместима с версией вашего форума.',
	
	'WARNING'				=> 'Предупреждение',
	'WRITE_DIRECT_FAIL'		=> 'АвтоМод не может скопировать файл «%s», используя прямой метод записи. Попробуйте изменить метод записи и повторите попытку.',
	'WRITE_DIRECT_TOO_SHORT'=> 'АвтоМод не может завершить запись файла «%s». Попробуйте нажать кнопку «Повторить». Если это не помогло, то попробуйте использовать другой метод записи.',
	'WRITE_MANUAL_FAIL'		=> 'АвтоМод не может добавить в архив файл «%s». Попробуйте использовать другой метод записи.',
	'WRITE_METHOD'			=> 'Метод записи файлов',
	'WRITE_METHOD_DIRECT'	=> 'Прямой',
	'WRITE_METHOD_EXPLAIN'	=> 'Выберите предпочтительный метод записи файлов. Наиболее совместимый метод — загрузка архивного файла.',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'Загрузка архивного файла',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Добавить после',
	'before add'			=> 'Добавить перед',
	'find'					=> 'Найти',
	'in-line-after-add'		=> 'В строке добавить после',
	'in-line-before-add'	=> 'В строке добавить перед',
	'in-line-edit'			=> 'Найти в строке',
	'in-line-operation'		=> 'В строке увеличить значение',
	'in-line-replace'		=> 'В строке заменить',
	'in-line-replace-with'	=> 'В строке заменить',
	'replace'				=> 'Заменить',
	'replace with'			=> 'Заменить',
	'operation'				=> 'Увеличить значение',
));

?>