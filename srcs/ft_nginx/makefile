NAME  = ft_nginx

all: dockerbuild

dockerbuild: dockerfile
	docker build -t ${NAME} ./

clean:
	:

fclean:
	docker image rm ${NAME} | :

re: fclean all

.PHONY: \
	all re clean fclean \
	dockerbuild \
