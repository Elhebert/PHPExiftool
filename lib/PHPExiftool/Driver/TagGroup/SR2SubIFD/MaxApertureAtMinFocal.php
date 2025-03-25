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
class MaxApertureAtMinFocal extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:MaxApertureAtMinFocal';

  protected string $name = 'MaxApertureAtMinFocal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 361767
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:MaxApertureAtMinFocal',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
