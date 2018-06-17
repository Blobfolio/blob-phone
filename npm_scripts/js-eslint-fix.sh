#!/bin/bash
#
# NPM: ESlint
#
# These are a little too cumbersome to deal with inside NPM.
##



# Check dependencies.
command -v eslint >/dev/null 2>&1 || {
	echo -e "\033[31;1mError:\033[0m eslint must be in \$PATH."
	echo -e "\033[96;1mFix:\033[0m npm i eslint -g"
	exit 1
}



# Not much to do.
eslint --fix --color lib/js/blob-phone.js



exit 0
