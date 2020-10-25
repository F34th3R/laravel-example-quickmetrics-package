# Laravel - Package Locally

Simple package using [Quickmetrics](https://quickmetrics.io)

![](https://landen.imgix.net/7uo90gw60ep2/assets/bxqlfij4.png?w=1000&h=800&fit=max)

## Usage

### step 01

`docker-compose up -d --build laravel_package`

### step 02

`docker-compose run --rm composer update`
`docker-compose run --rm composer install`

### step 03

`docker-compose run --rm artisan vendor:publish`

and select `feather/quickmetrics/QuickmetricsServiceProvider`

### step 04

Into `.env` copy your `API KEY` of [Quickmetrics](https://quickmetrics.io/)

```
QUICKMETRICS_API_KEY=
```

### run the app 💃🏻[http://localhost:8080/test](http://localhost:8080/test) 🌟
