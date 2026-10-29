# Tienda

## Levantar el proyecto

```bash
cp .env.example .env
docker compose up -d --build
docker compose exec app composer install
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed
```

Abrir http://localhost:8080/productos

phpMyAdmin: http://localhost:8081
