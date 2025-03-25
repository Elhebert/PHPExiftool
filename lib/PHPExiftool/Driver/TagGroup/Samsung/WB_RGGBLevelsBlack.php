<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsBlack extends AbstractTagGroup
{

  protected string $id = 'Samsung:WB_RGGBLevelsBlack';

  protected string $name = 'WB_RGGBLevelsBlack';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335560
       * type : int32s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Samsung::Type2.Samsung:WB_RGGBLevelsBlack',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
