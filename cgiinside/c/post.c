#include <stdio.h>
#include <stdlib.h>

int main(void) {
  // извлекаем значения переменных окружения
  char *remote_addr = getenv("REMOTE_ADDR");
  char *content_length = getenv("CONTENT_LENGTH");
  char *query_string = getenv("QUERY_STRING");
  // вычисляем длину данных — переводим строку в число
  int num_bytes = atoi(content_length);
  // выделяем в свободной памяти буфер нужного размера
  char *data = (char *)malloc(num_bytes + 1);
  // читаем данные из стандартного потока ввода
  fread(data, 1, num_bytes, stdin);
  // добавляем нулевой код в конец строки
  // (в C нулевой код сигнализирует о конце строки)
  data[num_bytes] = 0;
  // выводим заголовок
  printf("Content-type: text/html\n\n");
  // выводим документ
  printf("<!DOCTYPE html>");
  printf("<html lang='ru'>");
  printf("<head>");
  printf("<title>Получение данных POST</title>");
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
