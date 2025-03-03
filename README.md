# Portfolio

This portfolio presents a dynamic platform for managing your content, backed by a backend developed in PHP and Laravel. This backend allows access to information through API endpoints. Additionally, it features a frontend developed in TypeScript and Astro, designed to consume the backend API and efficiently display portfolio information. A notable feature is the presence of a webhook in the frontend, allowing the backend to send a POST request when data modifications occur, thus triggering an automatic frontend rebuild to maintain synchronization smoothly.

## Index

- [Requirements](#Requirements)
- [Instructions](#Instructions-for-use)
- [License](#License)

## Requirements

The requirements to use this portfolio include installing Docker and having an account on Cloudflare to take advantage of Zero Trust.

## Instructions for use

To use this portfolio, it is necessary to create four configuration files (.env):

- .env.mongo with the following variables:
    - MONGO_INITDB_ROOT_USERNAME: MongoDB root user.
    - MONGO_INITDB_ROOT_PASSWORD: MongoDB root user password.
- .env.cloudflare with the following variable:
    - TUNNEL_TOKEN: Cloudflare token.
- .env.astro with the following variables:
    - LANG: Portfolio language.
    - RESOURCE_URL: Backend URL to access files such as CV or images.
- .env.laravel with Laravel variables:
    - APP configuration.
    - Database connection configuration.
    - Email configuration.
    - LANGUAGE: Platform language to modify portfolio information.

Once you have created the environment files, simply run the following command to create Docker containers:

```bash
    docker-compose up -d --build
```

## License

This project is available under the GPL-3.0 License. For the full text of the license, please refer to the following link: [License](LICENSE)
