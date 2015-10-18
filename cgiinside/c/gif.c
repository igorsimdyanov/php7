// Результат работы скрипта - оторбажение картинки.
#include <stdio.h> 

// Возвращает размер открытого файла.
long filesize(FILE *f) { 
  long pos, size;
  pos = ftell(f); 
  fseek(f, 0, 2); 
  size = ftell(f); 
  fseek(f, pos, 0); 
  return size; 
} 

int main(void) {
  // Открываем потоки в режиме бинарного чтения и записи (обязательно!).
  FILE *f = fopen("test.gif", "rb");
  FILE *st = fdopen(fileno(stdout), "wb");
  // Выводим необходимые заголовки. 
  fprintf(st, "Pragma: no-cache\r\n");
  fprintf(st, "Content-type: image/gif\r\n");
  fprintf(st, "Content-length: %d\r\n", filesize(f));
  fprintf(st, "\r\n");
  // Печатаем картинку блоками по 4000 байт.
  while (1) {
    char s[4000+1];
    int size = fread(s, 1, 4000, f);
    if (!size) break;
    fwrite(s, size, 1, st);
  }
}
