server {
  listen   80;
  root /var/www/example.io/www;
  access_log /var/www/example.io/log/access.log;
  error_log  /var/www/example.io/log/error.log;
  
  server_name example.io www.example.io;

  include /etc/nginx/templates/default;
  include /etc/nginx/templates/php;
}
