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
class CommanderGroupBMode extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommanderGroupBMode';

  protected string $name = 'CommanderGroupBMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228798
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderGroupBMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229292
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderGroupBMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
