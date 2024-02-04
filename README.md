
# Install Required Packages

 - [ ] Ansible

# Deploy VMs

 - [ ] Deploy required VMs
 - [ ] Copy SSH Key to ```/k3s_lab/keys```

# Update all variables

**```/k3s_lab/ansible/inventory/group_vars/all.yml```**

 - [ ] Update **k3s_version** to desired version.
 - [ ] Update **cns_plugins_version** to desired version.

**```/k3s_lab/ansible/inventory/hosts```**

 - [ ] Replace **mn1.k8s.domain.com** with IP or FQDN of first master node.
 - [ ] Add additional master nodes if desired, in odd multiples, e.g. mn-2 and mn-3.
 - [ ] Replace **un1.k8s.domain.com** with IP or FQDN of first utility node.
 - [ ] Add additional utility nodes if desired, e.g. un-2.
 - [ ] Add worker nodes if desired, e.g. wk-1.

**```/k3s_lab/k8s_apache/ingress.yaml```**

 - [ ] Replace **web.domain.com** with appropriate host entry.

# Deploy K3s

```ansible-playbook site.yml```

Prepare local environment to interact with K8s cluster.
``` KUBECONFIG=~/k3s_lab/ansible/k3s.yaml```
```alias k=kubectl``` (Optional)

# Install NGINX Ingress

```cd ingress```
```./install_ingress.sh```

# Deploy Apache
```cd k8s_apache```
```kubectl apply -f deployment.yaml```
```kubectl apply -f service.yaml```
```kubectl apply -f ingress.yaml```


