
build:
	docker image build -t postfix:3.4.5 .

test:
	docker container run -d --rm --name test postfix:3.4.5
	docker container exec -ti test bash
	docker container rm -f test

