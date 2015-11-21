<?php ## Определение типа файла.
  // Получаем права доступа и тип файла
  $perms = fileperms("text.txt");

  // Определяем тип файла
  if (($perms & 0xC000) == 0xC000)
    echo "Сокет";
  elseif (($perms & 0xA000) == 0xA000)
    echo "Символическая ссылка";
  elseif (($perms & 0x8000) == 0x8000)
    echo "Обычный файл";
  elseif (($perms & 0x6000) == 0x6000)
    echo "Специальный блочный файл";
  elseif (($perms & 0x4000) == 0x4000)
    echo "Каталог";
  elseif (($perms & 0x2000) == 0x2000)
    echo "Специальный символьный файл";
  elseif (($perms & 0x1000) == 0x1000)
    echo "FIFO-канал";
  else
    echo "Неизвестный файл";
?>
