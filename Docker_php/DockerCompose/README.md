# Docker compose

## Exemple
docker build -t php-online-examination-app:latest .

## Votre image
docker build -t <nom_de_image> : < tag > .

## Déployer avec docker compose

docker compose up

docker compose down


docker compose -f docker-compose-1.yml up
docker compose -f docker-compose-1.yml down