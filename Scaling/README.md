# Docker compose scalling

```yaml
## exemple docker-compose.yaml
services:
  frontend:
    image: httpd
    deploy:
      replicas: 2
```


```bash
docker compose up -d
```


pour augmenter le nombre de conteneurs, utilisez la commande ci-dessous :

```bash
# Scale up to 5 containers
docker compose up -d --scale frontend=5
```

```bash
# Scale up to 5 containers
docker compose up -d --scale frontend=1
```

```bash
docker compose down
```