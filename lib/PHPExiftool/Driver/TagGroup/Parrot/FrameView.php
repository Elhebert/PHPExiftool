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
class FrameView extends AbstractTagGroup
{

  protected string $id = 'Parrot:FrameView';

  protected string $name = 'FrameView';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282040
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:FrameView',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282313
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:FrameView',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282523
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:FrameView',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

}
