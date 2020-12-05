#!/bin/bash

# service nginx stop;

make image || exit 1
ID=$(docker run -d -p 443:443 -p 80:80 ftnginx)
docker exec -ti $ID sh
docker stop $ID