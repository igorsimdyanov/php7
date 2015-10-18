#include <stdio.h>  // Включаем функции ввода/вывода
#include <stdlib.h> // Включаем функцию getenv()

int main(void) {
  // получаем значение переменной окружения REMOTE_ADDR
  char *remote_addr = getenv("REMOTE_ADDR");
  // ... и еще QUERY_STRING
  char *query_string = getenv("QUERY_STRING");
  // печатаем заголовок
  printf("Content-type: text/html\n\n");
  // печатаем документ
  printf("<!DOCTYPE html>");
  printf("<html lang='ru'>");
  printf("<head>");
  printf("<title>Работа с переменными окружения</title>");
  printf("<meta charset='utf-8'>");
  printf("</head>");
  printf("<body>");
  printf("<h1>Здравствуйте. Мы знаем о Вас все!</h1>");
  printf("<p>Ваш IP-адрес: %s</p>", remote_addr);
  printf("</p>Вот параметры, которые Вы указали: %s</p>", query_string);
  printf("</body></html>");
}
