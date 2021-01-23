#!/bin/bash

while [[ $(kubectl get pods -l app=ftinfluxdb -o 'jsonpath={..status.conditions[?(@.type=="Ready")].status}') != "True" ]]; 
do
	sleep 1; 
done
sleep 2;
