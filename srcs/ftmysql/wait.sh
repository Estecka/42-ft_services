#!/bin/bash

while [[ $(kubectl get pods -l app=ftmysql -o 'jsonpath={..status.conditions[?(@.type=="Ready")].status}') != "True" ]]; 
do
	sleep 1; 
done
sleep 2;
