DEPLOYMENT = ftnginx
IMAGE = ft_nginx

all: image deploy

image:
	docker build -t ${IMAGE} ./

deploy:
	kubectl apply -f ${IMAGE}.yaml

clean:
	kubectl delete deployment ${DEPLOYMENT} | :
	kubectl delete service ${DEPLOYMENT} | :

fclean: clean
	docker image rm ${IMAGE} | :

re: fclean all

.PHONY: \
	all re clean fclean \
	deployment \
	image \
