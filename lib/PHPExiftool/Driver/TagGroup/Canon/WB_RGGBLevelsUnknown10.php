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
class WB_RGGBLevelsUnknown10 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown10';

  protected string $name = 'WB_RGGBLevelsUnknown10';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59382
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59660
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59988
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60438
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60960
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61635
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61869
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62279
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62761
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown10',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2084;

}
