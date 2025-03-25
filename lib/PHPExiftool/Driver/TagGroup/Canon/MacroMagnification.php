<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MacroMagnification extends AbstractTagGroup
{

  protected string $id = 'Canon:MacroMagnification';

  protected string $name = 'MacroMagnification';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4573
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13592
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 19976
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22010
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32288
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35065
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63765
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::FileInfo.Canon:MacroMagnification',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
