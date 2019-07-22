VERSION = 3.4.5-3

build:
	docker image build -t postfix-existo:${VERSION} .

test:
	docker container run -d --rm --name test postfix-existo:${VERSION}
	docker container exec -ti test bash
	docker container rm -f test

# publish:
# 	docker tag dovecot:$(VERSION) existo/dovecot:$(VERSION)
# 	docker push existo/dovecot:$(VERSION)

