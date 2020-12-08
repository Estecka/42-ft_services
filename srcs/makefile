SERVICES = \
	metallb \
	ftnginx \

all:
	for s in ${SERVICES}; do \
		make -C ./$$s/ ;\
	done;

re: fclean all

clean:
	for s in ${SERVICES}; do \
		make clean -C ./$$s/ ;\
	done;

fclean:
	minikube delete;


.PHONY: all re clean fclean