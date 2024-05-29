# Use the official WordPress image as a base
FROM wordpress:latest

# Set the working directory
WORKDIR /var/www/html

# Install git
RUN apt-get update && apt-get install -y git

# Remove all files in the current directory
RUN rm -rf /var/www/html/*

# Clone the repository into a temporary directory
RUN git clone https://github.com/dinhhuy2603/propell.git /tmp/propell

# Copy the files from the temporary directory to the working directory
RUN cp -r /tmp/propell/* /var/www/html/
# Ensure the right permissions
RUN chown -R www-data:www-data /var/www/html
