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
class ColorTone extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTone';

  protected string $name = 'ColorTone';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13434
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:ColorTone',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17788
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:ColorTone',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 58820
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::CameraSettings.Canon:ColorTone',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorInfo
       * line : 63115
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ColorInfo.Canon:ColorTone',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Canon::LogInfo
       * line : 64487
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Canon::LogInfo.Canon:ColorTone',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
