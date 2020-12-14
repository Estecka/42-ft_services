#!/bin/bash

while [[ $(kubectl get pods -l app=ftmysql -o 'jsonpath={..status.conditions[?(@.type=="Ready")].status}') != "True" ]]; 
do
	sleep 1; 
done
sleep 2;
kubectl exec -i deploy/ftmysql -- sh << eof
	echo "
		CREATE USER 'user42'@'%' IDENTIFIED BY '';
		GRANT ALL PRIVILEGES ON *.* TO 'user42'@'%' WITH GRANT OPTION;
	" | mysql;
eof