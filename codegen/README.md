This directory contains files to generate api code by swagger codegen.

# codegen.sh

Script for calling online swagger codegen

# codegen-body.json

Request body to give when calling online swagger codegen.

# swagger.yml

In the definition of the original [swagger.yml](http://swagger.nature/global/swagger.yml) file, the path of each API is started with `/1`, and when codegen is executed, the generated function name starts with `1`. Since PHP does not allow numbers at the beginning of function names, syntax error occurs. To avoid this problem, this swagger.yml file moves `/1` to` basePath` and removes `/1` from the beginning of `path` of each API.
