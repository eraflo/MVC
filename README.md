# MVC
 Implementation of a MVC with template engine Smarty


## Languages

- [PHP 8.2.0](https://www.php.net/)

## Others

- [Smarty 4](https://smarty-php.github.io/smarty/4.x/)
- [Composer](https://getcomposer.org/)
- [Xampp](https://www.apachefriends.org/fr/index.html)

## Informations

The parts commented and files with **"Template"** in their name are examples to implement controlers, templates, or tables/models.

Enter your configuration infos about your connexion to your BDD in the file **"config/config.php"**

The **"public/index.php"** is the default page of your site, where you managed, based on the URL, which controller you use and which action you do.

You can add namespace in the **"composer.json"** file in the root folder.

### Extends

The controller and table you create need to extend from :
- **Controller** -> AppController
- **Table** -> Table

### Update composer.json

```
composer dump-autoload
```
## Smarty

### Import Smarty
You need to import Smarty to make the project work :
```
composer require smarty/smarty
```
### Variables Smarty created 

- **$data** : transfer data from a controler to smarty templates
- **$default** : main view file / base of the site where you import a different content depending of the page you are on 
- **$title** : site title in tabs

### Config

You can change the config of smarty (actually, only a little bit about caching option) in the **"config/configSmarty.php"** file

