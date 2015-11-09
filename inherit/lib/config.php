<?php ## Главный конфигурационный файл сайта. 
// Подключается ко всем сценариям (автоматически или вручную)
$sep = getenv("COMSPEC")? ";" : ":";
ini_set("include_path", dirname(__FILE__).$sep.ini_get("include_path"));
?>