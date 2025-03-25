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
class FirmwareVersion3 extends AbstractTagGroup
{

  protected string $id = 'Nikon:FirmwareVersion3';

  protected string $name = 'FirmwareVersion3';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209306
       * type : string
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:FirmwareVersion3',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209389
       * type : string
       * writable : true
       * count : 8
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:FirmwareVersion3',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 8;

  protected int $flags = 2052;

}
