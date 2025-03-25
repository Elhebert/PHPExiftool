<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Sanyo:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::MOV
       * line : 335793
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sanyo::MOV.Sanyo:FNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sanyo::MP4
       * line : 336012
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sanyo::MP4.Sanyo:FNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
