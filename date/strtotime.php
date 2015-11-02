<?php ## Использование функции strtotime().
  $check = [
      "now", 
      "10 September 2015", 
      "+1 day", 
      "+1 week", 
      "+1 week 2 days 4 hours 2 seconds",
      "next Thursday",
      "last Monday",
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование функции strtotime()</title>
  <meta charset='utf-8'>
</head>
<body>
  <table width="100%">
    <tr align="left">
      <th>Входная строка</th>
      <th>Timestamp</th>
      <th>Получившаяся дата</th>
      <th>Сегодня</th>
    </tr>
    <?php foreach ($check as $str) {?>
      <tr>  
        <td><?=$str?></td>
        <td><?=$stamp = strtotime($str)?></td>
        <td><?=date("Y-m-d H:i:s", $stamp)?></td>
        <td><?=date("Y-m-d H:i:s", time())?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>