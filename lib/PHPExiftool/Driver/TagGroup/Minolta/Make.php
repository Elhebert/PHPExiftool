<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{

  protected string $id = 'Minolta:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::MMA
       * line : 182531
       * type : string
       * writable : false
       * count : 20
       * flags : permanent
       */
      'id' => 'Minolta::MMA.Minolta:Make',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::MOV1
       * line : 182560
       * type : string
       * writable : false
       * count : 32
       * flags : permanent
       */
      'id' => 'Minolta::MOV1.Minolta:Make',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::MOV2
       * line : 182657
       * type : string
       * writable : false
       * count : 32
       * flags : permanent
       */
      'id' => 'Minolta::MOV2.Minolta:Make',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 4;

}
