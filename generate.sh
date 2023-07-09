#!/bin/bash

export PHP_POST_PROCESS_FILE="/usr/local/bin/prettier --write"

# Run openapi-generator-cli
openapi-generator-cli generate -i ~/Code/housemates-connect-api/housemates-connect.yaml -g php -o ./openapi_generated_connect --global-property skipFormModel=false

# Copy files from lib folder to codegen folder
cp -r ./openapi_generated_connect/lib/* ./codegen/

# Delete openapi_generated_connect folder
rm -rf ./openapi_generated_connect