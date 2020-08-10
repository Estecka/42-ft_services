# !/bin/bash

# Install kubernetes
if [ "$1" = "prelude" ]
then
	sudo usermod -aG docker $(whoami);
	exit;
fi

minikube start --vm-driver=docker
