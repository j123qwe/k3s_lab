#!/bin/bash

helm repo add ingress-nginx https://kubernetes.github.io/ingress-nginx
helm upgrade --install ingress-nginx -n ingress-nginx --create-namespace ingress-nginx/ingress-nginx -f ingress_values.yaml --version 4.9.1
