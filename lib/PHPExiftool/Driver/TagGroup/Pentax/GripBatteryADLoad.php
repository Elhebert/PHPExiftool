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
class GripBatteryADLoad extends AbstractTagGroup
{

  protected string $id = 'Pentax:GripBatteryADLoad';

  protected string $name = 'GripBatteryADLoad';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Grip Battery A/D Load',
    'fr' => 'Tension accu poignée en charge',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 284225
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:GripBatteryADLoad',
      'desc' => [
        'en' => 'Grip Battery A/D Load',
        'fr' => 'Tension accu poignée en charge',
      ],
    ],
  ];

}
