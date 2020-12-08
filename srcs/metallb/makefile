# https://metallb.universe.tf/installation/
NODEIP = $(shell kubectl describe node minikube | grep InternalIP | cut -c16-32)

all:
	#minikube addons enable metrics-server;
	kubectl apply -f namespace.yaml;
	kubectl apply -f metallb.yaml;
	sed 's/NODEIP/${NODEIP}/g' < config.yaml | kubectl apply -f -;
	kubectl create secret generic memberlist -n metallb-system \
		--from-literal=secretkey="$$(openssl rand -base64 128)";

re: fclean all

clean:
	kubectl delete namespace          metallb-system            || :
	kubectl delete clusterrole        metallb-system:speaker    || :
	kubectl delete clusterrole        metallb-system:controller || :
	kubectl delete clusterrolebinding metallb-system:speaker    || :
	kubectl delete clusterrolebinding metallb-system:controller || :
	kubectl delete podsecuritypolicy  speaker                   || :
	kubectl delete podsecuritypolicy  controller                || :


fclean: clean
	#minikube addons disable metrics-server || :

.PHONY: all re clean fclean
