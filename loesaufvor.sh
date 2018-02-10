#!/bin/bash
# revert Loesung auf Vorlage

# with sed include of solution is deactivated
# therefore the pattern //-- is changed to /*--
# in detail
# //-- include possible solution for demonstration purposes --> /*-- include possible solution for demonstration purposes
# ... code of solution ...
# //*/       # end of comment */ line-comment is only active, if solution is active due to no starting /*, this line needs not to be changed

# with sed lines provided for exercises are activated
# therefore the pattern /*## is changed to //##
# in detail
# /*## begin exercise  --> //## begin exercise
# ... code provided for exercises ...
# // end exercise */      # line comment is active until sed writes starting /*, this line must not be changed
# set -x
# that is done for every file in the list below
cd "/var/www/html/code/phpintro/src/exercises/templates"
#
sed "s/\/\*##/\/\/##/g" contact.php > /tmp/contact.1
sed "s/\/\/--/\/\*--/g" /tmp/contact.1 > contact.php
#
sed "s/\/\*##/\/\/##/g" imprint.php > /tmp/imprint.1
sed "s/\/\/--/\/\*--/g" /tmp/imprint.1 > imprint.php
#
cd "/var/www/html/code/phpintro/src/exercises/login"
#
sed "s/\/\*##/\/\/##/g" login.php > /tmp/login.1
sed "s/\/\/--/\/\*--/g" /tmp/login.1 > login.php
#
cd "/var/www/html/code/phpintro/src/exercises/register"
#
sed "s/\/\*##/\/\/##/g" register.php > /tmp/register.1
sed "s/\/\/--/\/\*--/g" /tmp/register.1 > register.php
# delete unnecessary files
rm /tmp/*.1