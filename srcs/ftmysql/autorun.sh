#!/bin/bash

make image || exit 1
ID=$(docker run -d ftmysql)
docker exec -ti $ID sh
docker stop $ID