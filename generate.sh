#!/bin/bash -e

# @see https://openapi-generator.tech/docs/generators/php/

rm -rf docs/ src/ tests/ || true

docker run --rm \
    -v $(pwd):/app \
    -u "${UID}:${GID}" \
    -w /app \
    openapitools/openapi-generator-cli generate \
        --input-spec https://api.apis.guru/v2/specs/akeneo.com/1.0.0/swagger.yaml \
        --skip-validate-spec \
        --http-user-agent 'Efsa-AkeneoApi/{packageVersion}/{language}' \
        --git-host github.com \
        --git-repo-id akeneo-php-api-client \
        --git-user-id efsa-io \
        --package-name AkeneoApi \
        --api-package Api \
        --model-package Model \
        --global-property apiTests=false,modelTests=false \
        --additional-properties invokerPackage=Efsa\\AkeneoApi \
        --additional-properties srcBasePath=src/ \
        --additional-properties artifactVersion=v1.0.0/ \
        --additional-properties variableNamingConvention=camelCase \
        -g php \
        --output .