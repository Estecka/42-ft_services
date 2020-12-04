DEPLOYMENT = ftnginx
IMAGE = ft_nginx
FILES = $(shell find files/ -type f)
TOKEN = ${IMAGE}.maketoken

all: ${TOKEN} deployment

${TOKEN}: dockerfile ${FILES}
	docker build -t ${IMAGE} ./
	touch ${TOKEN}


deployment:
	kubectl apply -f metallb.yaml
	kubectl apply -f metallb-configmap.yaml
	kubectl apply -f ${IMAGE}.yaml

clean:
	rm ${TOKEN} -f

fclean: clean
	docker image rm ${IMAGE} | :
	kubectl delete deployment ${DEPLOYMENT}-dpl | :
	kubectl delete service ${DEPLOYMENT}-svc | :

re: fclean all

.PHONY: \
	all re clean fclean \
	deployment \
