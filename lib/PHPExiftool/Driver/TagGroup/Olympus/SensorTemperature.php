<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorTemperature extends AbstractTagGroup
{

  protected string $id = 'Olympus:SensorTemperature';

  protected string $name = 'SensorTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255116
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:SensorTemperature',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255124
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:SensorTemperature',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::Main
       * line : 258504
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::Main.Olympus:SensorTemperature',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
