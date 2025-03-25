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
class ColorTempUnknown7 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown7';

  protected string $name = 'ColorTempUnknown7';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59353
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59631
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59959
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60409
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60931
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61606
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61840
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62250
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62732
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown7',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2084;

}
