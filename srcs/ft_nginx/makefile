IMAGE = ft_nginx
FILES = $(shell find files/ -type f)
TOKEN = ${IMAGE}.maketoken

${TOKEN}: dockerfile ${FILES}
	docker build -t ${IMAGE} ./
	touch ${TOKEN}

all: ${TOKEN}

clean:
	rm ${TOKEN} -f

fclean: clean
	docker image rm ${IMAGE} | :

re: fclean all

.PHONY: \
	all re clean fclean \
