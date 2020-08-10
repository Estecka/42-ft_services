# Steps that must be followed before running Minikube on the VM : 
- Run `sudo usermod -aG docker $(whoami);` so that docker no longer requires `sudo`
- Make sure the VM is set to run with 2 CPU cores or more.