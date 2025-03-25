<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryAFPoint extends AbstractTagGroup
{

  protected string $id = 'Nikon:PrimaryAFPoint';

  protected string $name = 'PrimaryAFPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188408
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188580
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188670
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188806
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189225
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189242
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189259
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189732
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189749
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190051
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190380
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190853
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190943
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
