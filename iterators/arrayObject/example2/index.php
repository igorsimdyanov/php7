<?php

require_once(__DIR__.'/view.php');

// create an instance of the View class 
$view = new View();

// assign some properties to the view object
$view->header = 'This is the header section';
$view->content = 'This the content section';
$view->footer  = 'This is the footer section';

// render the view (uses the default template file)
echo $view->render();