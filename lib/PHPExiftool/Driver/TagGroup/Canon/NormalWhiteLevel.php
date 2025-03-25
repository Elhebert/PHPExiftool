<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NormalWhiteLevel extends AbstractTagGroup
{

  protected string $id = 'Canon:NormalWhiteLevel';

  protected string $name = 'NormalWhiteLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60283
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData10.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60728
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData11.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61327
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61339
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61351
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData4.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData5
       * line : 61384
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData5.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61711
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62099
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62115
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62585
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62597
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63056
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorData9.Canon:NormalWhiteLevel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
