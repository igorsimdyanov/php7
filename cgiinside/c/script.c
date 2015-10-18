#include <time.h>   // Директива нужна для инициализации функции rand()
#include <stdio.h>  // Включаем поддержку функций ввода/вывода
#include <stdlib.h> // А это — для поддержки функции rand()

// Главная функция. Именно она и запускается при старте сценария.
int main(void) {
  // инициализируем генератор случайных чисел
  int num;
  time_t t;
  srand(time(&t));
  // в num записывается случайное число от 0 до 9
  num = rand() % 10;
  // далее выводим заголовки ответа
  printf("Content-type: text/html\n");
  // запрет кэширования данных браузером
  printf("Pragma: no-cache\n");
  // пустой заголовок
  printf("\n");
  // выводим текст документа — его мы увидим в браузере
  printf("<!DOCTYPE html>");
  printf("<html lang='ru'>");
  printf("<head>");
  printf("<title>Случайное число</title>");
  printf("<meta charset='utf-8'>");
  printf("</head>");
  printf("<body>");
  printf("<h1>Здравствуйте!</h1>");
  printf("<p>Случайное число в диапазоне 0-9: %d</p>", num);
  printf("</body>");
  printf("</html>");
}
