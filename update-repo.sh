#!/bin/bash

git fetch api

echo "Warning some local files may be overridden"

git pull api master
