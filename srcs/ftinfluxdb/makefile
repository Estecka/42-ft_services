NAME = ftinfluxdb

all: image deploy database

image:
	docker build -t ${NAME} ./

deploy:
	kubectl apply -f ${NAME}.yaml;
	./wait.sh;

database:
	kubectl exec -i deploy/ftinfluxdb -- \
		influx -execute "CREATE USER user42 WITH PASSWORD 'user42' WITH ALL PRIVILEGES"

clean:
	kubectl delete deployment            ${NAME} || :
	kubectl delete service               ${NAME} || :
	kubectl delete persistentvolumeclaim ${NAME} || :

fclean: clean
	docker image rm ${NAME} || :

re: clean all

.PHONY: \
	all re clean fclean \
	deployment \
	image \
	database \
