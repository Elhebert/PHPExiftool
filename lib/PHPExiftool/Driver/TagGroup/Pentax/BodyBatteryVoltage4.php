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
class BodyBatteryVoltage4 extends AbstractTagGroup
{

  protected string $id = 'Pentax:BodyBatteryVoltage4';

  protected string $name = 'BodyBatteryVoltage4';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 283891
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryVoltage4',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
