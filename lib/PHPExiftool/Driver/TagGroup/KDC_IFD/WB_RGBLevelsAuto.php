<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KDC_IFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsAuto extends AbstractTagGroup
{

  protected string $id = 'KDC_IFD:WB_RGBLevelsAuto';

  protected string $name = 'WB_RGBLevelsAuto';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::KDC_IFD
       * line : 157522
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::KDC_IFD.KDC_IFD:WB_RGBLevelsAuto',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
