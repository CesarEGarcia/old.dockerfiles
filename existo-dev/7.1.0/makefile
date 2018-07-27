
build: 
	docker image build -t existo-dev:7.1.0 .

test:
	docker container run -d --rm --name test existo-dev:7.1.0
	docker container exec -ti test bash
	docker container rm -f test

