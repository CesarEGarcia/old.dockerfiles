
build:
	docker build --rm -t local/c7-systemd-httpd .

run:
	docker run -ti -v /sys/fs/cgroup:/sys/fs/cgroup:ro -p 80:80 local/c7-systemd-httpd bash

