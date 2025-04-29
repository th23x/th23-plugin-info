# ️🗂️ th23 Plugin Info

Create readme.txt (WordPress.org), README.md (Github) and update.json (own updater) from one single source, simplifying your plugin development


## 🚀 Introduction

Getting tired of **maintaining and updating the same information in various places** during your plugin development? At least I got when juggling around with plugin information - keeping them in sync between some places in the code, the main plugin file header and the readme.txt.

This class allows to keep some such key information updated in one place and snyc them before release. It allows to create `readme.txt` (WordPress.org), `README.md` (Github) and `update.json` (own updater) from one single source (header of main plugin file) extended with further information from `plugin-info.php` (in the main plugin directory).

Some notes to understand what this class is / is not:

* This is **NOT a (fully fledged) plugin**, but a development tool (to be added to your plugin)
* It is **English only** and NOT translatable (if you can read this, you can use it and your end-users will never see it)
* It is **NOT performance optimized**, as NO live usage is intended (you run it once before release, never in production)

I use it together with my [th23 Admin class framework](https://github.com/th23x/th23-admin) providing a solid foundation for quick and easy plugin creation, while offering an easy to use configuration backend.


## ⚙️ Setup

The folder / file structure of your WordPress plugin when adding `th23 Plugin Info` class should look something like this:
```
inc/
   th23-plugin-info-class.php
plugin-info.php   ["entry" to call via URL and store $plugin array with infos]
th23-example.php  [main plugin file with header]
readme.txt        [to be created]
README.md         [to be created]
update.json       [to be created]
...
```

The `/inc` folder contains the `th23 Plugin Info` class, being separated from your main plugin code and keeping it easy to change / update later on.

The file `plugin-info.php` **can be based on** `plugin-info-example.php` from the repository (using the details of one of my own plugins as example) and be adjusted to your needs.

> [!IMPORTANT]
> Make sure to NOT edit anything below the line `// === Do NOT edit below this line for config ===` unless you are sure what you do ;-)


## 🖐️ Usage

After creating your `plugin-info.php` file in your plugins main folder, open it in a text editor of your choice.

To **enable the script for the time of development** (before production usage / release), find the line `die();` and comment is out, so you can call the script on your server via a browser.

As a bare minimum for the script to work the `$plugin` array in the file needs to contain the slug of your plugin, ie the file name of your main plugin file (minus its extension `.php`). For my th23 Specials plugin, this results in the following line in there:
```$plugin['slug'] = 'th23-specials';```

Calling the `plugin-info.php` in your browser **without any parameters will show you all options** - and also provide examples for good header in your main plugin file as well as a fully fledged `plugin-info.php` file.

> [!TIP]
> In case you already have some information specified, you can check these calling `plugin-info.php?mode=check`. This will give you some information about additional requirements, missing information, additional optional information, etc.

All parameters in a nutshell:

```
mode:
	[empty] / info (help, modes, full example)
	check (validate, missing, recommended)
	wp (create readme.txt, if no error or ignored)
	git (create README.md, if no error or ignored)
	json (create update.json, if no error or ignored)
	all (create all, if no error or ignored)
ignore:
	[defined] (ignore any errors, just create)
file:
	[empty] / show (create by showing in browser)
	server (create by writing to files)
	download (create by downloading as file)
```

> [!IMPORTANT]
> Make sure to "re-lock" the `plugin-info.php` file again before production release by re-enabling `die();` under the `// safety` line


## 💡 Frequently Asked Questions (FAQ)

#### I get the error "Missing plugin information" ❓ ####

Define (correct) plugin slug in `plugin-info.php` file, matching your main plugin file name

#### I get the error "Failed to load main plugin file" ❓ ####

Ensure `plugin-info.php` file is available in main plugin folder (and `th23-plugin-info-class.php` is located in the plugins `/inc` folder) - see structure in this repository

#### I get the error "Files can only be downloaded one by one" ❓ ####

You can not use the `all` mode for downloading files. Trigger downloads of single files one by one or use `show` (to be able to copy & paste the result) or `server` (to create / update the files in the main plugin folder) option upon creating plugin info as the `file` parameter

#### Why didn't you use your own tool for this scripts README.md ❓ ####

Simple: It is not a plugin, just a development support tool, so there is nothing to keep in sync... But I use it for all [my other plugins](https://github.com/th23x)


## 🤝 Contributors

Feel free to [raise issues](/issues) or [contribute code](/pulls) for improvements via GitHub.


## ©️ License

You are free to use this code in your projects as per the `GNU General Public License v3.0`. References to this repository are of course very welcome in return for my work 😉
