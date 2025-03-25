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
class CommandDialsChangeMainSub extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommandDialsChangeMainSub';

  protected string $name = 'CommandDialsChangeMainSub';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213630
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215471
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218093
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220543
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226056
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227149
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230600
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232442
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:CommandDialsChangeMainSub',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
