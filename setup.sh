# !/bin/bash

# Install kubernetes
if [ "$1" = "install" ]
then
	snap install kubectl --classic;
	snap install kubeadm --classic;
	exit;
fi
