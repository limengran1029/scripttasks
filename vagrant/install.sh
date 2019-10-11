#! /bin/bash

./change.sh Vagrantfile 192.168.100.100 configfile

vagrant up --provider=libvirt
