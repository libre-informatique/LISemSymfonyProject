#!/usr/bin/env sh

bin/codecept run -d --steps --fail-fast --no-interaction -g login -g ecommerce
