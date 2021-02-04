#!/bin/bash

cd $(dirname $BASH_SOURCE) || exit 1

docker ps >/dev/null 2>&1 \
||	if [ "$1" = "--no-loop" ] 
	then
		echo "Failed to acquire docker permissions.";
		exit 1;
    else
        sudo usermod -aG docker $USER \
        && newgrp docker <<< "$BASH_SOURCE --no-loop"; 
        exit;
	fi

minikube delete \
&& minikube start \
	--vm-driver=docker \
	--extra-config=kubelet.eviction-hard="nodefs.available<1Gi" \
&& eval $(minikube docker-env) \
&& make -C ./srcs/ \
;
