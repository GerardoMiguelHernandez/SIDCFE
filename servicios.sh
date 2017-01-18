#!/bin/bash

/etc/init.d/apache2 start
/etc/init.d/mysql start
USER="root"
PASS=""
mysql -u $USER -p$PASS <<EOF 2> /dev/null
CREATE DATABASE SIDCFE;
EOF
