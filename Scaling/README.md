# Docker compose scalling

```yaml
## exemple of docker-compose.yaml
services:
  frontend:
    image: httpd
    deploy:
      replicas: 2
```


```bash
docker compose up -d
```


Adding the number of containers, use this following command :

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