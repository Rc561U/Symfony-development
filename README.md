# Docker Compose setup for Symfony[6.3] Application



### Use composer and symfony-cli inside docker container
```shell
docker-compose -f ./docker/docker-compose.yml exec php-fpm bash
```

## Interaction with serializer
### Check Symfony Container Services Tagged with "serializer.normalizer" Tag
```shell
./bin/console deb:conta --tag=serializer.normal
```
### Add object to normalizer
```shell
composer req symfony/property-access
```
