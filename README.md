## Important

Since this is Docrine DBAL backport from TYPO3 > 7 it also requires 
newer configuration to be able to make connection with database. So
in your AdditionalConfiguration.php file you need to define
default databse connection like this (replace default values with
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

If connection is not defined, TYPO3 will throw an error  