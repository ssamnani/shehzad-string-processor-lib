[![Build Status](https://travis-ci.org/ssamnani/shehzad-string-processor-lib.svg?branch=master)](https://travis-ci.org/ssamnani/shehzad-string-processor-lib)
[![Coverage Status](https://coveralls.io/repos/github/ssamnani/shehzad-string-processor-lib/badge.svg?branch=master)](https://coveralls.io/github/ssamnani/shehzad-string-processor-lib?branch=master)
[![Current Version](https://img.shields.io/badge/latest_version-1.2.0-brightgreen.svg)](https://github.com/ssamnani/shehzad-string-processor-lib/releases/tag/v1.2.0)

![](https://img.shields.io/badge/PHP-black.svg?logo=php)

# shehzad-string-processor-lib

## Overview

### Introduction

Technical assessment display

### Installation

Gets the power of composer in your palms

1. Make sure you have a composer enabled project
2. `composer config repositories.shehzad-string-processor-lib git https://github.com/ssamnani/shehzad-string-processor-lib.git`
3. `composer require "ssamnani/shehzad-string-processor-lib:~1.2.0"`

And you are good to go!

### Documentation

[Here](https://ssamnani.github.io/shehzad-string-processor-lib/)

### Development

#### Steps

1. Install docker
2. Install docker-compose
3. Run `docker-compose up -d`
4. Wait and drink some coffee meanwhile ;)
5. Once done, Run `docker exec -it image_id /bin/sh -c "[ -e /bin/bash ] && /bin/bash || /bin/sh"`
6. Once inside container, Run `composer install`
7. Try the test by running `composer run-script test`
8. Voila, tell me how it was ;)

#### Running test

shell
composer update
composer run-script test:local


#### Making a release

Semantic release for the win

[Here](https://github.com/semantic-release/semantic-release)

#### Room for improvements