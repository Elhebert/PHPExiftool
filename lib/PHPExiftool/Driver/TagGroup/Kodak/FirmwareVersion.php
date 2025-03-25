<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Kodak:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Free
       * line : 154625
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Free.Kodak:FirmwareVersion',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159590
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:FirmwareVersion',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::Type11
       * line : 159927
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Type11.Kodak:FirmwareVersion',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::Type9
       * line : 160642
       * type : string
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Kodak::Type9.Kodak:FirmwareVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

  protected int $flags = 2052;

}
