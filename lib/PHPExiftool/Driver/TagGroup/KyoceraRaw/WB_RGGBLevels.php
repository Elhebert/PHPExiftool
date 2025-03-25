<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevels extends AbstractTagGroup
{

  protected string $id = 'KyoceraRaw:WB_RGGBLevels';

  protected string $name = 'WB_RGGBLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : KyoceraRaw::Main
       * line : 160857
       * type : int32u
       * writable : false
       * count : 4
       * flags : permanent
       */
      'id' => 'KyoceraRaw::Main.KyoceraRaw:WB_RGGBLevels',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 4;

}
