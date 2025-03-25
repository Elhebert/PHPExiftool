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
class WB_RGGBLevelsUnknown19 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown19';

  protected string $name = 'WB_RGGBLevelsUnknown19';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60186
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown19',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60647
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown19',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62067
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown19',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62477
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown19',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62959
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown19',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2084;

}
