#!/bin/bash

openssl req -x509 -out ./certs/nginx-selfsigned.crt -keyout ./private/nginx-selfsigned.key \
	-newkey rsa:2048 -nodes -days 30 -sha256 \
	-subj "/CN=localhost" -extensions EXT -config <( \
		printf "[dn]\nCN=localhost\n[req]\ndistinguished_name = dn\n[EXT]\nsubjectAltName=DNS:localhost\nkeyUsage=digitalSignature\nextendedKeyUsage=serverAuth" \
	);