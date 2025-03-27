# PHP-Exiftool

[![Unit tests](https://github.com/Elhebert/PHPExiftool/actions/workflows/test.yml/badge.svg)](https://github.com/Elhebert/PHPExiftool/actions/workflows/test.yml)

This project is a fork of [alchemy/PHPExiftool](https://github.com/alchemy-fr/PHPExiftool) to add Symfony 7 support. This fork also includes better static analysis and re-introduce the TagGroup as part of the package.

PHP Exiftool is an Object Oriented driver for Phil Harvey's Exiftool (see http://www.sno.phy.queensu.ca/~phil/exiftool/).
Exiftool is a powerful library and command line utility for reading, writing and editing meta information written in Perl.

PHPExiftool provides an intuitive object oriented interface to read and write metadata.

You will find some example below.

## Installation

```sh
composer require elhebert/phpexiftool
```

## Usage

### Exiftool Reader

A simple example : how to read metadata from a file:

```php
use Monolog\Logger;
use PHPExiftool\Reader;
use PHPExiftool\Driver\Value\ValueInterface;

$logger = new Logger('exiftool');
$reader = Reader::create($logger);

$metadataBag = $reader->files(__FILE__)->first();

foreach ($metadataBag as $metadata) {
    if (ValueInterface::TYPE_BINARY === $metadata->getValue()->getType()) {
        echo sprintf("\t--> Field %s has binary data" . PHP_EOL, $metadata->getTagGroup());
    } else {
        echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTagGroup(), $metadata->getValue()->asString());
    }
}
```

An example with directory inspection :

```php
use Monolog\Logger;
use PHPExiftool\Reader;
use PHPExiftool\Driver\Value\ValueInterface;

$logger = new Logger('exiftool');
$reader = Reader::create($logger);

$reader
  ->in(['documents', '/Picture'])
  ->extensions(['doc', 'jpg', 'cr2', 'dng'])
  ->exclude(['test', 'tmp'])
  ->followSymLinks();

foreach ($reader as $data) {
    echo "found file " . $data->getFile() . PHP_EOL;

    foreach ($data as $metadata) {
        if (ValueInterface::TYPE_BINARY === $metadata->getValue()->getType()) {
            echo sprintf("\t--> Field %s has binary data" . PHP_EOL, $metadata->getTagGroup());
        } else {
            echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTagGroup(), $metadata->getValue()->asString());
        }
    }
}
```

### Exiftool Writer

```php
use Monolog\Logger;
use PHPExiftool\Writer;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Driver\Tag\IPTC\ObjectName;
use PHPExiftool\Driver\Value\Mono;

$logger = new Logger('exiftool');
$writer = Writer::create($logger);

$bag = new MetadataBag();
$bag->add(new Metadata(new ObjectName(), new Mono('Pretty cool subject')));

$writer->write('image.jpg', $bag);
```

## License

Project licensed under the MIT License
