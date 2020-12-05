# !/bin/bash

sudo usermod -aG docker $(whoami) \
&& minikube delete \
&& minikube start \
	--vm-driver=docker \
	--extra-config=kubelet.eviction-hard="nodefs.available<1Gi" \
&& eval $(minikube docker-env) \
&& make -C ./srcs/ \
;
