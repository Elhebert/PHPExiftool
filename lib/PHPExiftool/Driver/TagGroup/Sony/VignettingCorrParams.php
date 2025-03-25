<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrParams extends AbstractTagGroup
{

  protected string $id = 'Sony:VignettingCorrParams';

  protected string $name = 'VignettingCorrParams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 387559
       * type : int16s
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9405a.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390208
       * type : int16s
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390215
       * type : int16s
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390222
       * type : int16s
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390226
       * type : int16s
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393381
       * type : int16s
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393385
       * type : int16s
       * writable : false
       * count : 16
       * flags : permanent
       */
      'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

  protected int $flags = 2052;

}
