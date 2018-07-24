
build: 
	docker image build -t phpmyadmin:4.8.2-7.1.19 .

test:
	docker container run -d --rm --name test phpmyadmin:4.8.2-7.1.19
	docker container exec -ti test bash
	docker container rm -f test

latest:
	docker image build -t phpmyadmin:4.8.2-7.1.19 .

