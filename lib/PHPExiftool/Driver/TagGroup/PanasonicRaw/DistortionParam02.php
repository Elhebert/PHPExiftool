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
class DistortionParam02 extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:DistortionParam02';

  protected string $name = 'DistortionParam02';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::DistortionInfo
       * line : 280146
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::DistortionInfo.PanasonicRaw:DistortionParam02',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
