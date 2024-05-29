# Use the official WordPress image as a base
FROM wordpress:latest

# Set the working directory
WORKDIR /var/www/html

# Install git
RUN apt-get update && apt-get install -y git

# Clone your repository
RUN git clone https://github.com/dinhhuy2603/propell.git .

# Ensure the right permissions
RUN chown -R www-data:www-data /var/www/html
