# Consumo de API Externa com Autenticação no Laravel

## 🔐 Configuração da API Key

- Crie uma conta gratuita no [OpenWeatherMap](https://openweathermap.org/).
- Copie sua API Key e adicione ao arquivo `.env`:


## 💥 Confirme que o `config/services.php` tem:

```php
'openweathermap' => [
    'key' => env('OPENWEATHERMAP_API_KEY'),
],
```

## 🌤️ Endpoint da API:

```php
GET http://localhost:8000/api/weather/Sao%20Paulo
```

## ✅ Exemplo de resposta esperada:

```php
    "coord": {
        "lon": -46.6361,
        "lat": -23.5475
    },
    "weather": [
        {
            "id": 800,
            "main": "Clear",
            "description": "céu limpo",
            "icon": "01d"
        }
    ],
    "base": "stations",
    "main": {
        "temp": 18.34,
        "feels_like": 17.48,
        "temp_min": 17.75,
        "temp_max": 19.2,
        "pressure": 1019,
        "humidity": 48,
        "sea_level": 1019,
        "grnd_level": 929
    },
    "visibility": 10000,
    "wind": {
        "speed": 6.17,
        "deg": 330
    },
    "clouds": {
        "all": 0
    },
    "dt": 1748545502,
    "sys": {
        "type": 1,
        "id": 8394,
        "country": "BR",
        "sunrise": 1748511605,
        "sunset": 1748550494
    },
    "timezone": -10800,
    "id": 3448439,
    "name": "Sao Paulo",
    "cod": 200

```
## ⚠️ Possíveis erros:

```php
401 Unauthorized: chave inválida ou não configurada.
404 Not Found: cidade inexistente.
```

