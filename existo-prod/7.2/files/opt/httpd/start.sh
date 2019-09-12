#!/bin/bash

chown web.web /var/log/httpd

touch /var/log/httpd/php.log
chown web.web /var/log/httpd/php.log

/opt/httpd/bin/apachectl start -DFOREGROUND