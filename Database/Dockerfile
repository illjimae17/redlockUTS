# Menggunakan image mysql dengan versi lastest
FROM mysql:latest

# Mengijinkan Password empty pada database
ENV MYSQL_ALLOW_EMPTY_PASSWORD = 1

#import database backup
COPY redlock-db.sql /docker-entrypoint-initdb.d/redlock-db.sql
