<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PanasonicRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevels3 extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:WB_RGBLevels3';

  protected string $name = 'WB_RGBLevels3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels 3',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::WBInfo2
       * line : 281889
       * type : int16u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'PanasonicRaw::WBInfo2.PanasonicRaw:WB_RGBLevels3',
      'desc' => [
        'en' => 'WB RGB Levels 3',
      ],
    ],
  ];

}
