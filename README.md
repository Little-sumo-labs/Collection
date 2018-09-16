Collection
=============

## Installation
### Cloning with composer
Create or update your composer.json and run `composer update`
```bash
$ composer require little-sumo-labs/Collection
```

### By download in Composer 
Just [download this repository](https://github.com/Little-sumo-labs/Collection/archive/master.zip) in a specific folder.

It should work without any problem, you just have to modify the index.php file and test the class.

## Quick usage
### Initialisation
```php
<?php
// Autoload via Composer
require 'vendor/autoload.php';

use App\Collection as collection;

// Creating a table with fake data
$notes = [
    ['name' => 'Jean', 'note' => 20, 'nickname' => 'test'],
    ['name' => 'Marc', 'note' => 13, 'nickname' => 'test2'],
    ['name' => 'Emilie', 'note' => 15, 'nickname' => 'test3']
];

// Initializing the Collection class
$collection = new collection($notes);
```

### Code usage
Example 1
```php
var_dump(
    $collection->get('0.name'),
    $collection->get('1')->get('name'),
    $collection->get('2.azename')
);
```
show info :
```php
'Jean'
'Marc'
''
```

Example 2
```php
var_dump(
    $collection->lists('name', 'note'),
    $collection->extract('note')
);
```
show info :
```php
object(App\Collection)[2]
  private 'items' => 
    array (size=3)
      'Jean' => int 20
      'Marc' => int 13
      'Emilie' => int 15
object(App\Collection)[4]
  private 'items' => 
    array (size=3)
      0 => int 20
      1 => int 13
      2 => int 15
```

Example 3
```php
var_dump(
    $collection->extract('note')->join(', ')
);
```
show info :
```php
'20, 13, 15'
```

Example 4
```php
var_dump(
    $collection->extract('note')->max(),
    $collection->max('note')
);
```
show info :
```php
'20'
'20'
'13'
'13'
```

## Documentation & Useful links
* [Tutoriel Vidéo PHP - Manipuler les tableaux en utilisant la POO](https://www.grafikart.fr/tutoriels/php/poo-collection-php-523)

## Contributing
Si vous avez des idées de développements, ou de correction, envoyez-moi un message sur le mail que vous pouvez retrouver dans le composer.json 