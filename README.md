# HNG Stage 1 API

A minimal REST API built with Slim PHP, deployed on a Linux VPS behind Nginx.

## Run Locally

```bash
git clone https://github.com/yourusername/hng-stage1-api
cd hng-stage1-api
composer install
php -S localhost:8000 -t public
```

## Endpoints

| Method | Path | Response |
|--------|------|----------|
| GET | / | `{"message":"API is running"}` |
| GET | /health | `{"message":"healthy"}` |
| GET | /me | `{"name":"...","email":"...","github":"..."}` |

All endpoints return `Content-Type: application/json` and HTTP 200.

## Live URL

https://akoshodi.duckdns.org
