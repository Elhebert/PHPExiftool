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
class BodyFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:BodyFirmwareVersion';

  protected string $name = 'BodyFirmwareVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254010
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::Equipment.Olympus:BodyFirmwareVersion',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::FETags
       * line : 254682
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::FETags.Olympus:BodyFirmwareVersion',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::Main
       * line : 256891
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Olympus::Main.Olympus:BodyFirmwareVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
