# !/bin/bash

# Install kubernetes
if [ "$1" = "prelude" ]
then
	sudo usermod -aG docker $(whoami);
	minikube start --vm-driver=docker
	exit;
elif [ "$1" = "build" ]
then
	eval $(minikube docker-env)
	docker build -t ftnginx srcs/ft_nginx/
	exit
elif [ "$1" = "run" ]
then
	kubectl run ftnginx --image-pull-policy=Never --image ftnginx
elif [ "$1" = "bake" ]
then
	kubectl get pod ftnginx -o yaml > srcs/ft_nginx.yaml
elif [ "$1" = "apply" ]
then
	kubectl apply -f srcs/ft_nginx.yaml
elif [ "$1" = "delete" ]
then
	kubectl delete pod ftnginx
fi

