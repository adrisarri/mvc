#!/bin/bash

# $1 nombre usuario

# $2 password

# $3 surname

# $4 home directory

# $5 group directory

#gid=$(wbinfo --group-info=$5)
#echo $gid
#gid_number=$(echo $gid | cut -d: -f3)
#echo $gid_number
sudo samba-tool user create $1 $2 --surname $3 --home-directory $4 #--gid-number $gid_number
sudo samba-tool group addmembers $5 $1