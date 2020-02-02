# docker-lemp

LEMP: Linux + Nginx 1.16.x + MySQL 5.7 + PHP 7.4 + phpMyAdmin 5

## Images

- [Nginx 1.16 (Alpine Linux)](https://hub.docker.com/_/nginx)
- [MySQL 5.7](https://hub.docker.com/_/mysql)
- [PHP-FPM 7.4 (Alpine Linux)](https://hub.docker.com/_/php)
- [phpMyAdmin 5](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)

## Quickstart

```sh
~$ docker-compose up -d
```

| Service           | Path                           |
| ----------------- | ------------------------------ |
| Nginx             | http://docker.localhost:49001/ |
| phpMyAdmin        | http://docker.localhost:49002/ |
| Nginx Root        | ./www                          |
| Nginx Log         | ./data/log/nginx               |
| MySQL Volume      | ./data/lib/mysql               |
| phpMyAdmin Volume | ./data/lib/phpmyadmin          |

## License

[MIT](https://github.com/kenkyu392/docker-lemp/blob/master/LICENSE)
