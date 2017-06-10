#!/bin/bash

RED=$'\033[0;31m'
NC=$'\033[0m' # No Color
BREW=0 # Brew and Xcode installed?
XCODE=0

echo "Why you so lazy >.<"
sleep 1
echo "Good thing I was bored and wrote this script for ya."
sleep 1
echo "OK Let's get started."
sleep 1
echo -e "What is your GitHub repo path? (ie. dev foundation is '${RED}Fadyazmy/developersfoundation${NC}')"
echo "Make sure to include the username and slash"

read REPO

while true; do
    read -p "Using ${RED}https://github.com/$REPO.git${NC} Are you sure this is correct? " yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "I give up, run da script to try again."; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

# LOL FINALLY ACTUALLY RUNNING THE COMMANDS
# git remote rm origin
echo -e "Changing ${RED}https://github.com/$REPO.git${NC} to origin."
git remote set-url origin https://github.com/$REPO.git
echo -e "Init origin master"
git push -u origin master
echo -e "Setting up API remote for api sync"
git remote add api https://github.com/nobodyrandom/blank-bootstrap.git

echo "Alls well. Done init."

# # Check if Xcode is installed
# if [ `find /Applications -maxdepth 1 -name Xcode.app | wc -m` != 0 ]; then
#     # Xcode is installed!
#     XCODE=1;
# else
#     # Xcode is not installed
#     echo "If you would like this script to install php, please install Xcode first."
# fi

# # Ask about installing brew (only if Xcode is installed)
# while [ XCODE -eq 1 ]; do
#     read -p "Would you like brew installed on MacOS? (It'll help us install php later) " yn
#     case $yn in
#         [Yy]* )
#             echo "xcode-select --install";
#             xcode-select --install;
#             echo "/usr/bin/ruby -e $(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)";
#             /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)";
#             break;;
#         [Nn]* ) echo "Great, we won't install it then."; break;;
#         * ) echo "Please answer yes or no.";;
#     esac
# done

# # Check if brew is installed
# if [ `which brew | wc -m` != 0 ]; then
#     # Brew is installed!
#     BREW=1;
# else
#     # Brew is not installed
#     echo "If you would like this script to install php, please install brew first."
# fi

# sleep 1

# while [[ BREW -eq 1 && XCODE -eq 1 ]]; do
#     read -p "Shall we install php on your Mac? " yn
#     case $yn in
#         [Yy]* ) echo "Future tip: If you run into problems, try updating Xcode Command Line Tools.";
#             brew tap homebrew/dupes;
#             brew tap homebrew/versions;
#             brew tap homebrew/homebrew-php;
#             brew install php70;
#             break;;
#         [Nn]* ) echo "Php will not be set up."; break;;
#         * ) echo "Please answer yes or no.";;
#     esac
# done

sleep 1

while true; do
    read -p "Do you want to init composer as well? (php must be setup for this to work)" yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) echo "Okay :("; exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sleep 1

php composer.phar update
