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
class IntervalShooting extends AbstractTagGroup
{

  protected string $id = 'Nikon:IntervalShooting';

  protected string $name = 'IntervalShooting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 207923
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:IntervalShooting',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209327
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:IntervalShooting',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209410
       * type : int16u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:IntervalShooting',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
