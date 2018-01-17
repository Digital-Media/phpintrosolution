#!/bin/bash
# set -x
# switch Vorlage auf Loesung

# with sed include of solution is activated
# therefore the pattern /*-- is changed to //--
# in detail
# /*-- include possible solution for demonstration purposes --> //-- include possible solution for demonstration purposes
# ... code of solution ...
# //*/       # end of comment */ line-comment is only active, if solution is active due to no starting /*, this line needs not to be changed

# with sed lines provided for exercises are set under comment
# therefore the pattern //## is changed to /*##
# in detail
# //## begin exercise  --> /*## begin exercise
# ... code provided for exercises ...
# // end exercise */      # line comment is active until sed writes starting /*, this line must not be changed
# that is done for every file in the list below
cd "/var/www/html/code/wbt2ue"
#
sed "s/\/\/##/\/\*##/g" contact.php > /tmp/index.1
sed "s/\/\*--/\/\/--/g" /tmp/index.1 > index.php
#
sed "s/\/\/##/\/\*##/g" login.php > /tmp/login.1
sed "s/\/\*--/\/\/--/g" /tmp/login.1 > login.php
#
sed "s/\/\/##/\/\*##/g" register.php > /tmp/register.1
sed "s/\/\*--/\/\/--/g" /tmp/register.1 > register.php
#
sed "s/\/\/##/\/\*##/g" includes/ImageProcessing.php > /tmp/image.1
sed "s/\/\*--/\/\/--/g" /tmp/image.1 > includes/ImageProcessing.php
#
cd "/var/www/html/code/wbt2ue"
#
sed "s/\/\/##/\/\*##/g" index.php > /tmp/index.1
sed "s/\/\*--/\/\/--/g" /tmp/index.1 > index.php
#
sed "s/\/\/##/\/\*##/g" includes/FileAccess.php > /tmp/file.1
sed "s/\/\*--/\/\/--/g" /tmp/file.1 > includes/FileAccess.php
#
sed "s/\/\/##/\/\*##/g" js/addressbook.js > /tmp/ab.1
sed "s/\/\*--/\/\/--/g" /tmp/ab.1 > js/addressbook.js
#
sed "s/\/\/##/\/\*##/g" js/searchsuggest.js > /tmp/search.1
sed "s/\/\*--/\/\/--/g" /tmp/search.1 > js/searchsuggest.js
# delete unnecessary files
rm /tmp/*.1