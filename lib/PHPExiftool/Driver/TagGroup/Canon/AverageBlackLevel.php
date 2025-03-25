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
class AverageBlackLevel extends AbstractTagGroup
{

  protected string $id = 'Canon:AverageBlackLevel';

  protected string $name = 'AverageBlackLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61317
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData4.Canon:AverageBlackLevel',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61701
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData6.Canon:AverageBlackLevel',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62089
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData7.Canon:AverageBlackLevel',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62579
       * type : int16u
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Canon::ColorData8.Canon:AverageBlackLevel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
