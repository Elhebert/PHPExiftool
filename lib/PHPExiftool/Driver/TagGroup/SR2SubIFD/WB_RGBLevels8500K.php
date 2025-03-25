<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevels8500K extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:WB_RGBLevels8500K';

  protected string $name = 'WB_RGBLevels8500K';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 361854
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:WB_RGBLevels8500K',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
