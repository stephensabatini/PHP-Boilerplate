# PHP Boilerplate

This repository contains the files for a very basic default PHP boilerplate.


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system. Also note that we use command line over SSH and Git for these instructions. There are many ways to go about setting this up but this is my preferred method (excluding batch scripts).


### Prerequisites

What things you need to install the software and how to install them

[Node.js](https://nodejs.org/en/download/)


### Installing

A step by step series of examples that tell you how to get a local development environment running. We assume you have MAMP or similar installed. If not, you may [install it here](https://www.mamp.info/en/).


Command line into the root of your installation and do the following to install the boilerplate:

First, you will clone/download the boilerplate from the repository:

`git clone git@github.com:stesab92/PHP-Boilerplate.git .`


Then, you will initialize the repository.

`git init`


## Running the compilers

In this project we use Node.js and Gulp to compile our assets and manage our dependencies.

`gulp` - Runs all of the compiler and watch tasks in parallel. (default)  
`gulp run` - Runs all of the compiler tasks in parallel.  
`gulp watch` - Runs all of the watch tasks in parallel.  
`gulp clean` - Deletes any files or folders output by the compiler for a clean start. (script.js, script.min.js, style.css, style.min.css, compiled images)  
`gulp sass` - Compile SCSS to CSS and combine files to style.css and style.min.css (minified).  
`gulp js` - Compile JS and combine files to script.js and script.min.js (minified).  
`gulp images` - Optimize any new images in the src/images directory to images.  
`gulp watch:sass` - Monitor src/scss directory and run sass task on change.  
`gulp watch:js` - Monitor src/js directory and run js task on change.  
`gulp watch:images` - Monitor src/images directory and run images task on change.  


## Browser Support

* [Browserl.ist](https://browserl.ist/?q=%3E+1%25%2C+ie+%3E%3D+11%2C+last+1+Android+versions%2C+last+1+ChromeAndroid+versions%2C+last+2+Chrome+versions%2C+last+2+Firefox+versions%2C+last+2+Safari+versions%2C+last+2+iOS+versions%2C+last+2+Edge+versions%2C+last+2+Opera+versions)


## Built With

* [HTML5](https://www.php.net/) - Backend Language
* [HTML5](https://www.w3.org/TR/html/) - Frontend Markup Language
* [CSS3](https://www.w3.org/TR/CSS/) - Frontend Stylesheet Language
* [SASS](https://sass-lang.com/) - Backend Stylesheet Language
* [Node.js](https://nodejs.org/en/) - Dependency Management
* [Gulp](https://gulpjs.com/) - Asset Compiler


## Versioning

We use [SemVer](https://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).


## SASS Architecture

We use [Sass Guidelines](https://sass-guidelin.es/) for structuring our SASS files.


## Authors

* **[Stephen Sabatini](https://stephensabatini.com/)**


## License

This is free software, and is released under the terms of the GNU General Public License (GPL) version 2. See the [LICENSE.md](LICENSE.md) file for details


## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
