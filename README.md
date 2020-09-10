# Trabalhe conosco

Demonstrativo de uma aplicação de vagas de trabalho usando o inertiajs, tailwind e o sentry

## Como Rodar 

Necessário docker e docker-compose.
Caso necessário altere os valores no .env e src/.env.
```
docker-compose up -d
```
### Aplicação
Acessar o bash do container workspace:
```
docker-compose exec -u laradock workspace bash
```

Rodar os seguitnes comandos:
```
composer install
php artisan migrate
php artisan db:seed
npm install
npm run dev
```

Porta padrão: 9090

### Sentry (opcional)
Cria migrations e o usuário administrador:
```
docker-compose exec sentry sentry upgrade
```

Porta padrão: 9080

