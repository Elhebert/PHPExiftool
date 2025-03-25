<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodyBatteryState extends AbstractTagGroup
{

  protected string $id = 'Pentax:BodyBatteryState';

  protected string $name = 'BodyBatteryState';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 283747
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 283775
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 283806
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
