NODEIP = $(shell kubectl describe node minikube | grep InternalIP | cut -c16-32)

NAME = ftftps

all: image deploy

image:
	docker build --build-arg NODEIP=${NODEIP} -t ${NAME} ./

deploy:
	kubectl apply -f ${NAME}.yaml;


clean:
	kubectl delete deployment ${NAME} || :
	kubectl delete service    ${NAME} || :

fclean: clean
	docker image rm ${NAME} || :

re: clean all

.PHONY: \
	all re clean fclean \
	deployment \
	image \
