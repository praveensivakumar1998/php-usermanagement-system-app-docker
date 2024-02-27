# Stage 1: Build Stage
FROM ubuntu AS build

RUN apt-get update && \
    apt-get install -y net-tools

WORKDIR /app

# Copy your application source code into the build stage
COPY . .

# Additional build steps go here if needed

# Stage 2: Configuration Stage
FROM php:7.4-apache

# Install PHP MySQL extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy files from the build stage
COPY --from=build /app /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
