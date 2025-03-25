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
class FlashWarning extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FlashWarning';

  protected string $name = 'FlashWarning';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227645
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:FlashWarning',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228549
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:FlashWarning',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234982
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:FlashWarning',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
