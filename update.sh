#!/bin/bash

# Navigate to the working directory
cd /var/www/html

# Stash any local changes (if necessary)
git stash

# Pull the latest changes from the repository
git pull origin main

# Apply stashed changes (if any)
git stash pop

# Set the correct permissions
chown -R www-data:www-data /var/www/html

# Restart Apache (or any other service if necessary)
service apache2 restart
