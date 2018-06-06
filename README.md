# Doctrine DBAL

Make TYPO3 Doctrine dbal available in TYPO3 7.6 (it's a backport of the v8.7 code)

This extension is meant to be uses with TYPO3 7.6. If you are using TYPO3 8 or later,
you have all this functionality alreay in core.

## Installation

Download this package and install it through Extension Manager or by using composer:

`composer requie macopedia/doctrine-dbal`

## Important

Since this is Doctrine DBAL backport from TYPO3 8.7 it also requires 
newer configuration to be able to make connection with database. So
in your `AdditionalConfiguration.php` file you need to define
default database connection like this (replace default values with
your own):

```
$GLOBALS['TYPO3_CONF_VARS']['DB'] = [
    'Connections' => [
        'Default' => [
            'dbname' => 'db',
            'driver' => 'mysqli',
            'host' => 'db',
            'password' => 'db',
            'port' => 3306,
            'user' => 'db',
        ],
    ],
];

```

If connection is not defined, TYPO3 will throw an error.


## Authors
**Marcin Sągol**

- m.sagol@macopedia.pl
- [https://github.com/soee](https://github.com/soee)
- [https://github.com/macopedia](https://github.com/macopedia)

## License

This package is released under [GPLv2](LICENSE) license 