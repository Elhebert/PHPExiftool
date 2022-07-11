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
class FlyingState extends AbstractTagGroup
{

  protected string $id = 'Parrot:FlyingState';

  protected string $name = 'FlyingState';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flying State',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282518
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:FlyingState',
      'desc' => [
        'en' => 'Flying State',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282701
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:FlyingState',
      'desc' => [
        'en' => 'Flying State',
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282945
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:FlyingState',
      'desc' => [
        'en' => 'Flying State',
      ],
    ],
  ];

}
