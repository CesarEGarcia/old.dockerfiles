VERSION = 7.2.1

build:
	docker image build -t existo-prod:$(VERSION) .

# latest:
# 	docker image build -t existo-dev:$(VERSION) -t existo-dev:7.2.latest .

# publish:
# 	docker tag existo-dev\:$(VERSION) existo/existo-dev\:$(VERSION)
# 	docker push existo/existo-dev\:$(VERSION)


test:
	docker container run -d --rm --name test existo-dev:$(VERSION)
	docker container exec -ti test bash
	docker container rm -f test

