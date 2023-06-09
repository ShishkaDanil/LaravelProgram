# Test Task

![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)

## Installation

```sh
cp .env.example .env
./artisan migrate
./artisan db:seed
```

## API routes
- /api/students/ 
- /api/schoolclasses/
- /api/lectures/
- /api/curriculum/ — study plan for classes

## Additionally
1. If you will test via Postman, then add to Headers:
```sh
Content-Type: application/json
X-Requested-With: XMLHttpRequest
```

## P.S.
1. Докер не стал добавлять.
2. render() в Handler слегка изменил.
3. Возможно, нужно было без таблицы "curriculum" реализовать, но сделал так.