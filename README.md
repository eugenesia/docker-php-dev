Docker PHP dev
==============

This is an basic setup for a PHP development environment using [Docker and
PHPFarm](https://github.com/eugenesia/docker-phpfarm).

Usage
-----

Go to the _docker/_ folder. Copy _default.env_ to _.env_, then set your project
name. This is optional. If you don't set your project name, it will remain as
"docker".

Copy _default.docker-compose.yml_ to _docker-compose.yml_. Modify it as you see
fit (although the default one will work).

Run `docker-compose up -d`, then browse to _http://localhost:8056/example.php_.
You should see an example page running PHP 5.6.

