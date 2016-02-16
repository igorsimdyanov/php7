<?php ## Транслитерация строк.
  function transliterate($st) {
    $st = strtr($st, 
      "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
      "abvgdegziyklmnoprstufyeABVGDEGZIYKLMNOPRSTUFYE"
    );
    $st = strtr($st, array(
      'ё'=>"yo",    'х'=>"h",  'ц'=>"ts",  'ч'=>"ch", 'ш'=>"sh",
      'щ'=>"shch",  'ъ'=>'',   'ь'=>'',    'ю'=>"yu", 'я'=>"ya",
      'Ё'=>"Yo",    'Х'=>"H",  'Ц'=>"Ts",  'Ч'=>"Ch", 'Ш'=>"Sh",
      'Щ'=>"Shch",  'Ъ'=>'',   'Ь'=>'',    'Ю'=>"Yu", 'Я'=>"Ya",
    ));
    return $st;
  }
  echo transliterate("У попа была собака, он ее любил.");
?>