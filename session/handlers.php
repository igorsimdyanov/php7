<?php ## Переопределение обработчиков сессии.
  // Возвращает полное имя файла временного хранилища сессии.
  // В случае, если нужно изменить тот каталог, в котором должны 
  // храниться сессии, достаточно поменять только эту функцию
  function ses_fname($key)
  {
    return dirname(__FILE__)."/sessiondata/".session_name()."/$key"; 
  }
  // Заглушки - эти функции просто ничего не делают
  function ses_open($save_path, $ses_name)
  {
    return true;
  }
  function ses_close()
  {
    return true;
  }

  // Чтение данных из временного хранилища
  function ses_read($key)
  {
    // Получаем имя файла и открываем файл.
    $fname = ses_fname($key);
    return @file_get_contents($fname);
  }

  // Запись данных сессии во временное хранилище
  function ses_write($key, $val)
  {
    $fname = ses_fname($key);
    // Сначала создаем все каталоги (в случае, если они уже есть,
    // игнорируем сообщения об ошибке)
    @mkdir(dirname(dirname($fname)), 0777);
    @mkdir(dirname($fname), 0777);
    // Создаем файл и записываем в него данные сессии.
    @file_put_contents($fname, $val);
    return true;
  }

  // Вызывается при уничтожении сессии
  function ses_destroy($key)
  {
    return @unlink(ses_fname($key));
  }

  // Сборка мусора - ищем все старые файлы и удаляем их
  function ses_gc($maxlifetime)
  {
    $dir = ses_fname(".");
    // Получаем доступ к каталогу текущей группы сессии.
    foreach (glob("$dir/*") as $fname) {
      // Файл слишком старый?
      if (time() - filemtime($fname) >= $maxlifetime) {
        @unlink($fname);
        continue;
      }
    }
    // Если директория непуста, она не удалится - будет предупреждение.
    // Мы его подавляем. Если же пуста - удалится, что нам и нужно.
    @rmdir($dir);
    return true;
  }

  // Регистрируем наши новые обработчики
  session_set_save_handler(
    "ses_open", "ses_close", 
    "ses_read", "ses_write", 
    "ses_destroy", "ses_gc"
  );

  // Для примера подключаемся к группе сессий test.
  session_name("test1");
  session_start();
  // Увеличиваем счетчик в сессии.
  $_SESSION['count'] = @$_SESSION['count'] + 1;
?>
<h2>Счетчик</h2>
В текущей сессии работы с браузером Вы открыли эту страницу
<?=$_SESSION['count']?> раз(а).<br>
Закройте браузер, чтобы обнулить счетчик.<br>
<a href="<?=$_SERVER['SCRIPT_NAME']?>" target="_blank">Открыть дочернее окно браузера</a>.
