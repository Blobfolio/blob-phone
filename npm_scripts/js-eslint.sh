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



# Actually we just want to know if there are errors or not.
eslint --color lib/js/blob-phone.js
if [ $? != 0 ]; then
	notify-send -i error --category dev.validate -h int:transient:1 -t 3000 "ESLint: Error" "Your Javascript did not validate."
	exit 1
fi



exit 0
