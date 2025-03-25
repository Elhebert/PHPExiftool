<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAssist extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AFAssist';

  protected string $name = 'AFAssist';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212095
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 216642
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222015
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 222654
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223245
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 223979
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224598
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226387
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 227793
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229606
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 233970
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:AFAssist',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
