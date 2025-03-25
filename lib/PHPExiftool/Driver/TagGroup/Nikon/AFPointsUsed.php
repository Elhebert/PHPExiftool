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
class AFPointsUsed extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFPointsUsed';

  protected string $name = 'AFPointsUsed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189771
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189780
       * type : undef
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189870
       * type : undef
       * writable : true
       * count : 5
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189879
       * type : undef
       * writable : true
       * count : 17
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189888
       * type : undef
       * writable : true
       * count : 21
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189897
       * type : undef
       * writable : true
       * count : 29
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189906
       * type : undef
       * writable : true
       * count : 20
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189915
       * type : undef
       * writable : true
       * count : 13
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189924
       * type : undef
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189933
       * type : undef
       * writable : true
       * count : 14
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2052;

}
