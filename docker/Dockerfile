FROM php:7.4-fpm

# Arguments defined in .env file
ARG DOCKER_USER_NAME
ARG DOCKER_USER_ID

# Check args
RUN if [ -z "$DOCKER_USER_NAME" ] || [ -z "$DOCKER_USER_ID" ]; then \
echo -e "\n\n\n\
  Delcare DOCKER_USER_NAME e DOCKER_USER_ID no arquivo .env, informando o nome e id do seu usuário.\n\
  Desta forma, você terá acesso aos arquivos criados dentro do container. Caso contrário, seriam criados como root e você poderia ter problemas de permissão.\n\
 \n\n\n"; \
exit 1; \
fi

# system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# PostgreSQL
RUN apt-get install -y libpq-dev

# Clear cache to optimize disk space
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install mbstring exif pcntl bcmath gd

# PostgreSQL
RUN docker-php-ext-install pdo_pgsql

# MySQL
# RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $DOCKER_USER_ID -d /home/$DOCKER_USER_NAME $DOCKER_USER_NAME && \
    mkdir -p /home/$DOCKER_USER_NAME/.composer && \
    chown -R $DOCKER_USER_NAME:$DOCKER_USER_NAME /home/$DOCKER_USER_NAME

# Set working directory
WORKDIR /var/www

USER $DOCKER_USER_NAME
