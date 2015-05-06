#!/bin/bash

# Init script for ChurchThemes.net
echo "Commencing adamkristopher.com setup"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS adamkristopher"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON adamkristopher.* TO wp@localhost IDENTIFIED BY 'wp';"

# The Vagrant site setup script will restart Nginx for us

# Let the user know the good news
echo "adamkristopher.com now installed";
