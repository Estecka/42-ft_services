NAME = ftwordpress

all: image deploy database

image:
	docker build -t ${NAME} ./

deploy:
	kubectl apply -f ${NAME}.yaml

database:
	kubectl exec -i deploy/ftmysql -- mysql < wordpress.sql

clean:
	kubectl delete deployment ${NAME} || :
	kubectl delete service    ${NAME} || :

fclean: clean
	docker image rm ${NAME} || :

re: clean all

.PHONY: \
	all re clean fclean \
	deployment \
	database \
	image \
