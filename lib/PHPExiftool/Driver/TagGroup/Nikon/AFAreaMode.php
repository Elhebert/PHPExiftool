<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFAreaMode';

  protected string $name = 'AFAreaMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo
       * line : 187860
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo.Nikon:AFAreaMode',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188130
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaMode',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188264
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaMode',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201087
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:AFAreaMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
