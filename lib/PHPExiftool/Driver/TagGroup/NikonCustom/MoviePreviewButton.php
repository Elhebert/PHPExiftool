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
class MoviePreviewButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MoviePreviewButton';

  protected string $name = 'MoviePreviewButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215985
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:MoviePreviewButton',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218597
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:MoviePreviewButton',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221047
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:MoviePreviewButton',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231169
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:MoviePreviewButton',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232946
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:MoviePreviewButton',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
