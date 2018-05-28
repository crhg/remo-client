#!/bin/sh
curl -X POST -H "content-type:application/json" -d "`cat codegen-body.json`" https://generator.swagger.io/api/gen/clients/php
