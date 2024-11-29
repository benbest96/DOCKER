# Docker compose

## Example
docker build -t php-online-examination-app:latest .

## Your image
docker build -t <name_of_your_image> : < tag > .

## Deploy with docker compose

docker compose up

## to stop the container

docker compose down 


docker compose -f docker-compose-1.yml up
docker compose -f docker-compose-1.yml down
