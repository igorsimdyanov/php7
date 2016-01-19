upstream example_com {
  server unix:/var/www/example.com/fastcgi.sock fail_timeout=0;
}
server {
  listen   80;
  root /var/www/example.com/www;
  access_log /var/www/example.com/log/access.log;
  error_log  /var/www/example.com/log/error.log;
  
  server_name example.com www.example.com;

  include /etc/nginx/templates/default;

  location ~* \.php$ {
    fastcgi_pass example_com;
    include fastcgi_params;
    fastcgi_index index.php;
  }
}