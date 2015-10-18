// Получение POST-данных с URL-декодированием.
#include <stdio.h>
#include <stdlib.h>
#include "urldecode.c"

int main(void) {
  // получаем значения переменных окружения
  char *remote_addr = getenv("REMOTE_ADDR");
  char *content_length = getenv("CONTENT_LENGTH");
  //!! выделяем память для буфера QUERY_STRING
  char *query_string = malloc(strlen(getenv("QUERY_STRING")) + 1);
  //!! копируем QUERY_STRING в созданный буфер 
  strcpy(query_string, getenv("QUERY_STRING"));
  // декодируем QUERY_STRING
  url_decode(query_string);
  // вычисляем количество байтов данных - переводим строку в число
  int num_bytes = atoi(content_length);
  // выделяем в свободной памяти буфер нужного размера
  char *data = (char*)malloc(num_bytes + 1);
  // читаем данные из стандартного потока ввода
  fread(data, 1, num_bytes, stdin);
  // добавляем нулевой код в конец строки
  // (в Си нулевой код сигнализирует о конце строки)
  data[num_bytes] = 0;
  // декодируем данные (хоть это и не совсем осмысленно, но 
  // выполняем сразу для всех POST-данных, не разбивая их на 
  // параметры)
  url_decode(data);
  // выводим заголовок
  printf("Content-type: text/html\n\n");
  // выводим документ
  printf("<!DOCTYPE html>");
  printf("<html lang='ru'>");
  printf("<head>");
  printf("<title>Получение данных POST с URL-декодированием</title>");
  printf("<meta charset='utf-8'>");
  printf("</head>");
  printf("<body>");
  printf("<h1>Здравствуйте. Мы знаем о Вас все!</h1>");
  printf("<p>Ваш IP-адрес: %s</p>", remote_addr);
  printf("<p>Количество байтов данных: %d</p>", num_bytes);
  printf("<p>Вот параметры, которые Вы указали: %s</p>", data);
  printf("<p>А вот то, что мы получили через URL: %s</p>", query_string);
  printf("</body></html>");
}