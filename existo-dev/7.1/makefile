VERSION = 7.1.1

build: 
	docker image build -t existo-dev:$(VERSION) .

# latest:
# 	docker image build -t existo-dev:$(VERSION) -t existo-dev:7.1.latest .

publish:
	docker tag existo-dev:$(VERSION) existodw/existo-dev:$(VERSION)
	docker push existodw/existo-dev:$(VERSION)

test:
	docker container run -d --rm --name test existo-dev:$(VERSION)
	docker container exec -ti test bash
	docker container rm -f test

