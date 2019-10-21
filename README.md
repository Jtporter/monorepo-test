# monorepo-test
Here I am testing monorepos for a php based project, based off of composers package manager. I am utilizing the following tools.  

https://github.com/Symplify/MonorepoBuilder

https://github.com/mateodelnorte/meta

### Getting started

Note: all commands can and should be run from the root of the repo.
```bash
$ npm i -g meta
$ meta git clone git@github.com:Jtporter/monorepo-test.git
$ cd ./monorepo-test
$ composer install
```

### Checking out a new branch
1. ```meta git checkout -b {branch-name}``` (Note: I do not think meta can handle the feature/branchName structure)
2. Make your changes to all the files/projects you need to
3. ```meta git add .```
4. ```meta git status```(sometimes the root will not add the changes it sees to its children packages, ```meta git add``` . if needed)
5. ```meta git commit -a -m "some message that relates to all the changes made throughout all projects"```
6. ```meta git push {branch-name}``` (you may set upstream if you'd like just as normal just prepend ```meta``` to the command)

### Making changes to composer.json files

To manage the packages for the root and all of the separate packages I am using https://github.com/Symplify/MonorepoBuilder

- After making changes to any of the ```composer.json``` files make sure to run 
```bash
vendor/bin/monorepo-builder merge
```
 at the root level of the project. This will merge all of the ```composer.json``` files into the root ```composer.json``` so that when running ```composer install``` the project will have all of the dependencies it needs to run properly.

### More options for Symplify/MonorepoBuilder

Start from step #2 here: https://github.com/Symplify/MonorepoBuilder you have the following possibilities.

#### - Bump Package Inter-dependencies

#### - Keep Synchronized Package Version

#### - Keep Package Alias Up-To-Date

#### - Split Directories to Git Repositories

#### - Release Flow

#### - Set Your Own Release Flow

