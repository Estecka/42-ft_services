NAME = ftmysql

all: image deploy

image:
	docker build -t ${NAME} ./

deploy:
	kubectl apply -f ${NAME}.yaml;
	./dbinit.sh;

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
