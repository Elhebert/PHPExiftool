<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsAuto extends AbstractTagGroup
{

  protected string $id = 'Nikon:WB_RGGBLevelsAuto';

  protected string $name = 'WB_RGGBLevelsAuto';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceB
       * line : 192077
       * type : int32u
       * writable : true
       * count : 4
       * flags : permanent,unsafe
       */
      'id' => 'Nikon::ColorBalanceB.Nikon:WB_RGGBLevelsAuto',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ColorBalanceC
       * line : 192175
       * type : int32u
       * writable : true
       * count : 4
       * flags : permanent,unsafe
       */
      'id' => 'Nikon::ColorBalanceC.Nikon:WB_RGGBLevelsAuto',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2068;

}
