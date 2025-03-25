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
class MovieType extends AbstractTagGroup
{

  protected string $id = 'Nikon:MovieType';

  protected string $name = 'MovieType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200107
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieType',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201263
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieType',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208231
       * type : ?
       * writable : true
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:MovieType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2084;

}
