#!/bin/bash

make image || exit 1
ID=$(docker run -d -p 8080:443 ftphpmyadmin)
docker exec -ti $ID sh
docker stop $ID