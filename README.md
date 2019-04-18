Collection
=============

## Installation
### Cloning with composer
Not Available yet.

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
#### Example 1 : Function get()
- Retrieves a value from a table. If this value is non-existent, the return will be empty

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

#### Example 2 : functions list() and extract()
- the lists () function will go back 2 informations from a table. The 1st info as the key of the output array, the 2nd info as the value of the output array. 
- The function extract() returns the different values of the requested data
```php
var_dump(
    $collection->lists('name', 'note')->items,
    $collection->extract('note')->items
);
```
show info :
```php
array (size=3)
  'Jean' => int 20
  'Marc' => int 13
  'Emilie' => int 15
array (size=3)
  0 => int 20
  1 => int 13
  2 => int 15
```

#### Example 3 : function join()
- the function will return all the values of the requested data, in a single list. the values will be separated by a specific character
```php
var_dump(
    $collection->extract('note')->join(', ')
);
```
show info :
```php
'20, 13, 15'
```

#### Example 4 : functions min() et max()
- returns respectively the min and max values ​​of a key, given in parameter
```php
var_dump(
    $collection->extract('note')->max(),
    $collection->max('note')
    $collection->extract('note')->min(),
    $collection->min('note')
);
```
show info :
```php
'20'
'20'
'13'
'13'
```

#### Example 5 : functions orderBy()
- Sorts a collection of arrays or objects by key.
```php
var_dump(
    $collection->orderBy('name', 'asc')->items
);
```
show info :
```php
array (size=3)
  0 => 
    array (size=3)
      'name' => string 'Emilie' (length=6)
      'note' => int 15
      'nickname' => string 'test3' (length=5)
  1 => 
    array (size=3)
      'name' => string 'Jean' (length=4)
      'note' => int 20
      'nickname' => string 'test' (length=4)
  2 => 
    array (size=3)
      'name' => string 'Marc' (length=4)
      'note' => int 13
      'nickname' => string 'test2' (length=5)
```

#### Example 6 : functions take()
- Returns an array with n elements removed from the beginning.
```php
var_dump(
    $collection->take(2)
);
```
show info :
```php
array (size=2)
  0 => 
    array (size=3)
      'name' => string 'Jean' (length=4)
      'note' => int 20
      'nickname' => string 'test' (length=4)
  1 => 
    array (size=3)
      'name' => string 'Marc' (length=4)
      'note' => int 13
      'nickname' => string 'test2' (length=5)
```

## Documentation & Useful links
* [Tutoriel Vidéo PHP - Manipuler les tableaux en utilisant la POO](https://www.grafikart.fr/tutoriels/php/poo-collection-php-523)
* [ A curated collection of useful PHP snippets that you can understand in 30 seconds or less.](https://github.com/appzcoder/30-seconds-of-php-code)

## Contributing
If you have ideas for developments, or correction, send me a message. You can find my email in composer.json 