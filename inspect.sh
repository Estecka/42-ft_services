#!/bin/bash

while true;
do 
	clear; 
	kubectl describe node minikube | grep 'Taints\|InternalIP';
	kubectl get service | grep 'NAME\|ftnginx';
	sleep 10 || exit;
done
