// Назначаем обработчики, только после полной загрузки  документа
$(function(){
  // Обработчик нажания на кнопку submit
  $('input[type=submit]').on('click', function(e){
    // Предотвращаем обычное поведение элемента
    e.preventDefault();
    // Формируем JSON из полей формы
    var json = {
      name: $('input[name=name]').val(),
      family:  $('input[name=family]').val()
    }
    // Экранируемые спец-символы
    var map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    // Отправляем асинхронный POST-запрос по адресу
    // указанному в атрибуте action формы
    $.ajax({
      url: $('form').prop('action'),
      method: 'POST',
      data: 'json=' + JSON.stringify(json)
    })
    // В случае успешного получения ответа от сервера
    .done(function(msg){
      // Заменяем надпись Здравствуйте в поле p#is-hello
      $('#js-hello').html(
        msg.replace(/[&<>"']/g, function(m) {
          return map[m];
        })
      );
    });
  });
});