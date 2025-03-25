<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Shutter extends AbstractTagGroup
{

  protected string $id = 'Sony:Shutter';

  protected string $name = 'Shutter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379074
       * type : int16u
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Sony::Tag9050a.Sony:Shutter',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381296
       * type : int16u
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Sony::Tag9050b.Sony:Shutter',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 383711
       * type : int16u
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Sony::Tag9050c.Sony:Shutter',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2052;

}
