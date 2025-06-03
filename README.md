# Multilingual Plugin Translation Guide

## Overview
This plugin supports multiple languages through WordPress' built-in localization system.

## Translation Files
- POT (Template) file: Located in `/languages/multilingual-plugin.pot`
- PO (Portable Object) files: Created for each language
- MO (Machine Object) files: Compiled from PO files
- Create PO and MO file using Poedit tool

## How to create POT (The command insert in htdocs folder)

(1) php -v

(2) curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

(3) php wp-cli.phar --info

(4) echo 'alias wp="php ~/wp-cli.phar"' >> ~/.bashrc

(5) source ~/.bashrc

(6) echo 'alias wp="php /c/xampp/htdocs/wp-cli.phar"' >> ~/.bashrc

(7) source ~/.bashrc

(8) wp --info

(9) cd /c/xampp/htdocs/wordpress/wp-content/plugins/my-simple-plugin (your plugin path)

(10) wp i18n make-pot ./ ./languages/my-simple-plugin.pot --slug=my-simple-plugin (replace your slug)


