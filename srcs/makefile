SERVICES = \
	metallb \
	ftnginx \

all:
	make dashboard;
	for s in ${SERVICES}; do \
		make -C ./$$s/ ;\
	done;

dashboard:
	minikube addons enable dashboard;
	kubectl apply -f dashboard.yaml;

re: fclean all

clean:
	kubectl delete service dashboard -n kubernetes-dashboard || :
	for s in ${SERVICES}; do \
		make clean -C ./$$s/ ;\
	done;

fclean:
	minikube delete;


.PHONY: \
	all re clean fclean \
	dashboard \