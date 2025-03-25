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
class PreviewButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:PreviewButton';

  protected string $name = 'PreviewButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213056
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213280
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215347
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217946
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220405
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225816
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226988
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230401
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232298
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:PreviewButton',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
