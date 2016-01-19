<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование данных формы</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
	if ($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101") {
	  echo "Доступ открыт для пользователя {$_REQUEST['login']}";
	  // Команда блокирования рабочей станции (работает в NT-системах)
	  system("rundll32.exe user32.dll,LockWorkStation");
	} else {
	  echo "Доступ закрыт!";
	}
?>
</body>
</html>
