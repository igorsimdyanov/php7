server {
  listen   80;
  root /var/www/example.com/www;
  access_log /var/www/example.com/log/access.log;
  error_log  /var/www/example.com/log/error.log;
  
  index index.html;

  error_page 404 /404.html;
  error_page 500 /500.html;

  server_name example.com www.example.com;
  client_max_body_size 32m;
}