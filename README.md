# shehzad-string-processor-lib

## Development

### Steps

1. Install docker.
2. Install docker-compose
3. Run `docker-compose up -d`
4. Wait and drink some coffee meanwhile ;)
5. Once done, Run `docker exec -it image_id /bin/sh -c "[ -e /bin/bash ] && /bin/bash || /bin/sh"`
6. Once inside container, Run `composer install`
7. Try the test by running `composer run-script test`
8. Voila, tell me how it was ;)