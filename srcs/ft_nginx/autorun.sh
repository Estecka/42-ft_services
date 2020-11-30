#!/bin/bash

# service nginx stop;

docker build -t ft_nginx ./ || exit 1
ID=$(docker run -d -p 443:443 -p 80:80 ft_nginx)
docker exec -ti $ID sh
docker stop $ID