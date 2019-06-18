VERSION = 3.4.5

build:
	docker image build -t postfix:${VERSION} .

# latest:
# 	docker image build -t existo-dev:$(VERSION) -t existo-dev:7.1.latest .

publish:
	docker tag postfix:$(VERSION) existo/postfix:$(VERSION)
	docker push existo/postfix:$(VERSION)

test:
	docker container run -d --rm --name test postfix:${VERSION}
	docker container exec -ti test bash
	docker container rm -f test

