#!/bin/bash

make image || exit 1
ID=$(docker run -d -p 5050:443 ftwordpress)
docker exec -ti $ID sh
docker stop $ID