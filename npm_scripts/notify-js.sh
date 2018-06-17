#!/bin/bash
#
# NPM: Notify JS
#
# These are a little too cumbersome to deal with inside NPM.
##


# Check dependencies.
command -v notify-send >/dev/null 2>&1 || {
	echo -e "\033[31;1mError:\033[0m notify-send must be in \$PATH."
	exit 1
}



notify-send -i "$( pwd )/npm_scripts/icon.png" --category dev.validate -h int:transient:1 -t 3000 "Javascript" "The Javascript has been linted, minified, and exported!"
exit 0
