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
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'Kodak:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154382
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:SerialNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Free
       * line : 154635
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::Free.Kodak:SerialNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 158791
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:SerialNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159747
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:SerialNumber',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::Type7
       * line : 160533
       * type : string
       * writable : true
       * count : 16
       * flags : permanent
       */
      'id' => 'Kodak::Type7.Kodak:SerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

  protected int $flags = 2052;

}
