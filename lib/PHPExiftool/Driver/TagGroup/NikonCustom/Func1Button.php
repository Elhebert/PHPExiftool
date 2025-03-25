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
class Func1Button extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:Func1Button';

  protected string $name = 'Func1Button';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217824
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:Func1Button',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220292
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:Func1Button',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232179
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:Func1Button',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 236012
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:Func1Button',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
