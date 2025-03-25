<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'HP:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : HP::TDHD
       * line : 142094
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'HP::TDHD.HP:SerialNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : HP::Type2
       * line : 142144
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'HP::Type2.HP:SerialNumber',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : HP::Type4
       * line : 142223
       * type : string
       * writable : false
       * count : 26
       * flags : permanent
       */
      'id' => 'HP::Type4.HP:SerialNumber',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : HP::Type6
       * line : 142302
       * type : string
       * writable : false
       * count : 26
       * flags : permanent
       */
      'id' => 'HP::Type6.HP:SerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 26;

  protected int $flags = 4;

}
