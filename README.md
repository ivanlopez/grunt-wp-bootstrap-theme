# grunt-wp-bootsrap-theme

> Create a WordPress theme with [grunt-init][].

[grunt-init]: http://gruntjs.com/project-scaffolding

## Installation
If you haven't already done so, install [grunt-init][].

Once grunt-init is installed, place this template in your `~/.grunt-init/` directory. It's recommended that you use git to clone this template into that directory, as follows:

### Linux/Mac Users

```
git clone git@github.com:ivanlopez/grunt-wp-bootstrap-theme.git ~/.grunt-init/wp-bootsrap-theme
```

### Windows Users

```
git clone git@github.com:ivanlopez/grunt-wp-bootstrap-theme.git ~/.grunt-init/wp-bootsrap-theme
```

## Usage

At the command-line, cd into an empty directory, run this command and follow the prompts. Due to having fonts you need to use --force. I plan to update it soon so that you don't need to user --force.

```
grunt-init wp-bootsrap-theme --force
```

_Note that this template will generate files in the current directory, so be sure to change to a new directory first if you don't want to overwrite existing files._

Install the NPM modules required to actually process your newly-created project by running:

```
npm install
```

## Scaffold

After running the init command above, you will be presented with a standard directory structure similar to:

    /theme
    .. /assets
    .. .. /css
    .. .. .. /src
    .. .. .. /less
    .. .. .. /vendor
    .. .. /js
    .. .. .. /src
     .. .. /fonts
    .. /images
    .. .. /src
    .. /includes
    .. /languages
    .. .. theme.pot
    .. .gitignore
    .. Gruntfile.js
    .. footer.php
    .. functions.php
    .. header.php
    .. humans.txt
    .. index.php
    .. screenshot.png
    .. style.css


*Note:* The `style.css` file in the root of the directory shouldn't contain any style definitions. It's used for populating information on WordPress' themes page only. Your theme's style information should go in the appropriate source directory for your preprocessor under `/assets/css`.

### JavaScript

You should only ever be modifying script files in the `/js/src` directory.  Grunt will automatically concatenate and minify your scripts into `/js/filename.js` and `/js/filename.min.js`.  These generated files should never be modified directly.

### Images

The `/img/src` directory exists only to allow you to keep track of source files (like PSDs or separate images that have been merged into sprites).  This helps keep source files under version control, and allows you to bundle them with the distribution of your new GPL plugin.

## Release History

 * 2013-07-18   v0.1.3   Better grunt module inclusion (props @aaronjorbin)
 * 2013-05-31   v0.1.2   Fix a template renaming bug.
 * 2013-04-29   v0.1.1   Update directory structure and minified file names. Fix some naming mismatches.
 * 2013-04-26   v0.1.0   Initial public release
