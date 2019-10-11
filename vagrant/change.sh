#! /bin/bash

if [ "$#" -ne 3 ];then
	echo "Error! Usager: $0 templatefile IP scriptfile"
	exit 1
fi

sed -E -i.bak -e "s/IPADRESS/$2/" -e "/CONFIGFILE/ r$3" -e "/CONFIGFILE/d" "$1"
