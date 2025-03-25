<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{

  protected string $id = 'RIFF:DateTimeOriginal';

  protected string $name = 'DateTimeOriginal';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::BroadcastExt
       * line : 327781
       * type : string
       * writable : false
       * count : 18
       * flags : 
       */
      'id' => 'RIFF::BroadcastExt.RIFF:DateTimeOriginal',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::Hdrl
       * line : 327966
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Hdrl.RIFF:DateTimeOriginal',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : RIFF::Info
       * line : 328046
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:DateTimeOriginal',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : RIFF::Info
       * line : 328213
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:DateTimeOriginal',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : RIFF::Main
       * line : 328633
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Main.RIFF:DateTimeOriginal',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 18;

}
