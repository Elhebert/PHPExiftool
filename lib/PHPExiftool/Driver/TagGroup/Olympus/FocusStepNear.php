<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusStepNear extends AbstractTagGroup
{

  protected string $id = 'Olympus:FocusStepNear';

  protected string $name = 'FocusStepNear';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 254762
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:FocusStepNear',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259193
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::Main.Olympus:FocusStepNear',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
