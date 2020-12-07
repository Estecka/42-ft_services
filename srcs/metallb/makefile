all:
	kubectl apply -f metallb.yaml;
	kubectl apply -f metallb-configmap.yaml;

re: fclean all

clean:
	kubectl delete configmap          config         -n metallb-system | :
	kubectl delete deploy             controller     -n metallb-system | :
	kubectl delete daemonset          speaker        -n metallb-system | :
	kubectl delete role               config-watcher -n metallb-system | :
	kubectl delete serviceaccount     speaker        -n metallb-system | :
	kubectl delete serviceaccount     controller     -n metallb-system | :
	kubectl delete namespace metallb-system | :
	kubectl delete clusterrole        metallb-system:speaker    | :
	kubectl delete clusterrole        metallb-system:controller | :
	kubectl delete clusterrolebinding metallb-system:speaker    | :
	kubectl delete clusterrolebinding metallb-system:controller | :
	kubectl delete podsecuritypolicy speaker | :


fclean: clean

.PHONY: all re clean fclean
