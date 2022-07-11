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
class WB_RGGBLevelsPC2 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsPC2';

  protected string $name = 'WB_RGGBLevelsPC2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels PC2',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData2
       * line : 61036
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsPC2',
      'desc' => [
        'en' => 'WB RGGB Levels PC2',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61227
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsPC2',
      'desc' => [
        'en' => 'WB RGGB Levels PC2',
      ],
    ],
  ];

}
