# Menggunakan image PHP 8.1.0 dan apache webserver
FROM php:8.1-apache

# Setting working directory
WORKDIR /var/www/html

# Update Apache just in case
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli

# Setting ACL untuk owner dan group menjadi www-data untuk direktori /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Menghilangkan permission 'w' dan 'x' untuk others
RUN chmod -R o-wx /var/www/html

# Menyalin isi dari index.php untuk tampilan web app
COPY index.php /var/www/html

# Setting port apache
EXPOSE 80

