#!/bin/bash

git fetch api

echo "Warning some local files may be overridden"
sleep 1

while true; do
    read -p "Do you want to continue? " yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "I give up, run da script to try again."; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

git pull api master

