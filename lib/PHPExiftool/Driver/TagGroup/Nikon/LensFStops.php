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
class LensFStops extends AbstractTagGroup
{

  protected string $id = 'Nikon:LensFStops';

  protected string $name = 'LensFStops';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195559
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData00.Nikon:LensFStops',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195691
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData01.Nikon:LensFStops',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 195832
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:LensFStops',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196039
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:LensFStops',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::Main
       * line : 197341
       * type : undef
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Nikon::Main.Nikon:LensFStops',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
