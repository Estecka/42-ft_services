IMAGE  = ft_nginx

all: dockerbuild

dockerbuild: dockerfile
	docker build -t ${IMAGE} ./

clean:
	:

fclean:
	docker image rm ${IMAGE} | :

re: fclean all

.PHONY: \
	all re clean fclean \
	dockerbuild \
	test \
