#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// начало программы
int main() {
  // временный буфер
  char buf[1000];
  char buf_cookie[1000];
  // получаем в переменную Cook значение Cookies
  char *cook = getenv("HTTP_COOKIE");
  if(cook != NULL) {
    // пропускаем в ней 5 первых символов ("cook="), если она не пустая -
    // получим как раз значение cookie, которое мы установили ранее
    // (см. ниже).
    strcpy(buf_cookie, cook + 5);
  }
  // получаем переменную QUERY_STRING
  char *query = getenv("QUERY_STRING");
  // проверяем, заданы ли параметры у сценария — если да, то
  // пользователь, очевидно, ввел свое имя или нажал кнопку,
  // в противном случае он просто запустил сценарий без параметров
  if(query != NULL) { // строка не пустая?
    // копируем в буфер значение QUERY_STRING,
    // пропуская первые 5 символов (часть "name=") -
    // получим как раз текст пользователя
    strcpy(buf, query + 5);
    // пользователь ввел имя — значит, нужно установить cookie
    printf("Set-cookie: cook=%s; "
           "expires=Thursday, 2-Feb-17 15:52:00 GMT\n", buf);
    // Теперь это новое значение cookie
    strcpy(buf_cookie, buf);
  }
  // выводим страницу с формой
  printf("Content-type: text/html\n\n");

  printf("<!DOCTYPE html>\n");
  printf("<html lang='ru'>\n");
  printf("<head>\n");
  printf("<title>Простой сценарий, использующий cookies</title>\n");
  printf("<meta charset='utf-8'>\n");
  printf("</head>\n");
  printf("<body>\n\n");
  // если имя задано (не пустая строка), приветствие
  if(strlen(buf_cookie) > 0)
    printf("<h1>Привет, %s!</h1>\n", buf_cookie);
  // продолжаем
  printf("<form action='/cgi-bin/script.cgi' method='GET'>\n");
  printf("<p>Ваше имя: ");
  printf("<input type='text' name='name' value='%s'></p>\n", buf_cookie);
  printf("<p><input type='submit' value='Отправить'></p>\n");
  printf("</form>\n");
  printf("</body></html>");
}
