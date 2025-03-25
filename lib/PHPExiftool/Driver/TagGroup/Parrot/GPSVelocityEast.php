<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSVelocityEast extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSVelocityEast';

  protected string $name = 'GPSVelocityEast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V2
       * line : 282301
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:GPSVelocityEast',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V3
       * line : 282508
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:GPSVelocityEast',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
