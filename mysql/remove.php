<?php
  ////////////////////////////////////////////////////////////
  // 2003-2012 (C) IT-студия SoftTime (http://www.softtime.ru)
  ////////////////////////////////////////////////////////////
  // Если константа DEBUG определена, работает отладочный
  // вариант, в частности выводится подробные сообщения об
  // исключительных ситуациях, связанных с MySQL и ООП
  define("DEBUG", 1);
  // сейчас выставлен сервер локальной машины
  $dblocation = "localhost";
  // Имя базы данных, на хостинге или локальной машине
  $dbname = "softtimeorg";
  // Имя пользователя базы данных
  $dbuser = "root";
  // и его пароль
  $dbpasswd = "";

  // Аккаунты
  $tbl_accounts            = 'softtimeorg_accounts';
  $tbl_accounts_permission = 'softtimeorg_accounts_permission';
  // CMS
  $tbl_catalog             = 'softtimeorg_menu_catalog';
  $tbl_position            = 'softtimeorg_menu_position';
  $tbl_paragraph           = 'softtimeorg_menu_paragraph';
  $tbl_paragraph_image     = 'softtimeorg_menu_paragraph_image';
  // Новости
  $tbl_news                = 'softtimeorg_news';
  // Гостевая книга
  $tbl_guestbook           = 'softtimeorg_guestbook';
  // Тесты
  $tbl_test_catalog        = 'softtimeorg_test_catalog';
  $tbl_test_question       = 'softtimeorg_test_question';
  // Список книг
  $tbl_booklist            = 'softtimeorg_booklist';
  // Сотрудники
  $tbl_members             = 'softtimeorg_members';
  // Фотогалерея
  $tbl_photo_catalog       = 'softtimeorg_photo_catalog';
  $tbl_photo_position      = 'softtimeorg_photo_position';
  $tbl_photo_settings      = 'softtimeorg_photo_settings';
  // Блог
  $tbl_blog_catalogs       = 'softtimeorg_blog_catalogs';
  $tbl_blog_position       = 'softtimeorg_blog_position';
  $tbl_blog_paragraph      = 'softtimeorg_blog_paragraph';
  // Цитаты
  $tbl_citations           = 'softtimeorg_citations';
  // Шутки
  $tbl_jokes_catalogs      = 'softtimeorg_jokes_catalogs';
  $tbl_jokes_positions     = 'softtimeorg_jokes_positions';
  // Форум
  $tbl_authors             = "authors";
  $tbl_posts               = "posts";
  $tbl_themes              = "themes";
  // Консультарий
  $tbl_users               = 'softtimeorg_consult_users';
  $tbl_request             = 'softtimeorg_consult_request';
  $tbl_users_pay           = 'softtimeorg_consult_users_pay';
  $tbl_users_totalsum      = 'softtimeorg_consult_users_totalsum';
  $tbl_parameter           = 'softtimeorg_consult_parameter';

  if($_SERVER['SERVER_NAME'] != "localhost" &&
     $_SERVER['SERVER_NAME'] != "softtimeorg.dev")
  {
    $dblocation = "localhost";
    $dbname = "softtime_org";
    $dbuser = "softtimeorg";
    $dbpasswd = "MUgfpVUtAl4zCWg";
  }
  ////////////////////////////////////////////////////////////
  // Путь к папке с классами
  ////////////////////////////////////////////////////////////
  define("CLASSDIR", "../class/");

  // Устанавливаем соединение с базой данных
  $dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
  if (!$dbcnx)
  {
    exit("<P>В настоящий момент сервер базы данных не доступен, 
          поэтому корректное отображение страницы невозможно.</P>");
  }
  // Выбираем базу данных
  if (! @mysql_select_db($dbname,$dbcnx) )
  {
    exit("<P>В настоящий момент база данных не доступна, поэтому 
          корректное отображение страницы невозможно.</P>");
  }

  @mysql_query("SET NAMES 'cp1251'");

  if(!function_exists('get_magic_quotes_gpc'))
  {
    function get_magic_quotes_gpc()
    {
      return false;
    }
  }
  // Выставляем часовой пояс
  @date_default_timezone_set("Europe/Moscow");
?>
