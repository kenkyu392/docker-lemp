# docker-lemp

LEMP: Linux + Nginx 1.16.x + MySQL 5.7 + PHP 7.4 + phpMyAdmin 5

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
