#!/usr/bin/env bash

echo "Running pre-push hook"
<<<<<<< HEAD:tools/scripts/pre-push.bash
./tools/scripts/run-tests.bash
=======
./scripts/run-tests.bash
>>>>>>> c0b4069... feature: configured pre-push hook and babel for tests:scripts/pre-push.bash

# $? stores exit value of the last command
if [ $? -ne 0 ]; then
 echo "Tests must pass before push!"
 exit 1
fi
