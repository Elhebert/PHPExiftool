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
class ModelType extends AbstractTagGroup
{

  protected string $id = 'Minolta:ModelType';

  protected string $name = 'ModelType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::MOV1
       * line : 182578
       * type : string
       * writable : false
       * count : 8
       * flags : permanent
       */
      'id' => 'Minolta::MOV1.Minolta:ModelType',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::MOV2
       * line : 182675
       * type : string
       * writable : false
       * count : 8
       * flags : permanent
       */
      'id' => 'Minolta::MOV2.Minolta:ModelType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 8;

  protected int $flags = 4;

}
