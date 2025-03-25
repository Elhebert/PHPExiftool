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
class ExternalFlashFirmware extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExternalFlashFirmware';

  protected string $name = 'ExternalFlashFirmware';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192371
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 192878
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193450
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194074
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 194686
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::FlashInfo0300
       * line : 195173
       * type : int8u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Nikon::FlashInfo0300.Nikon:ExternalFlashFirmware',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
