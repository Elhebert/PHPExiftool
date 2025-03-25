<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RedLevelsFluorescent extends AbstractTagGroup
{

  protected string $id = 'Minolta:WB_RedLevelsFluorescent';

  protected string $name = 'WB_RedLevelsFluorescent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185530
       * type : int16u
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RedLevelsFluorescent',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185597
       * type : int16u
       * writable : true
       * count : 7
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RedLevelsFluorescent',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 7;

  protected int $flags = 2052;

}
