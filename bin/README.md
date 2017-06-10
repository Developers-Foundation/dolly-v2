# Blank Bootstrap
For developers' foundation

Dupe this for quick new projects :D

GitHub link is: https://github.com/nobodyrandom/blank-bootstrap.git
Inspirations: https://www.facebook.com/groups/hackathonhackers/permalink/1421368544585293/

## Table of Contents:

- [How-To](#how-to)
- [Google Maps](#google-maps)

## How-To:
#### Clone template and setup composer
To clone into a new repo use:

1. Create new git repo on github
2. In a clean space (not inside another git repo) `git clone https://github.com/nobodyrandom/blank-bootstrap.git projectName`
3. `cd projectName`
4. `git remote rm origin`
5. `git remote add origin https://github.com/nobodyrandom/NAME_OF_REPO.git`
6. `git push -u origin master`

(If you are really that lazy, I've included a shell script to run step 2 onwards to set up everything. Run it using `./init.sh` on terminal. No cmd support yet)


#### Deploy to Heroku
If you would like to use quick deploy into heroku after you cloned.

Update the `app.json` and click the below button.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)
