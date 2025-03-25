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
class NoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Olympus:NoiseReduction';

  protected string $name = 'NoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 251669
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:NoiseReduction',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259146
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::Main.Olympus:NoiseReduction',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
