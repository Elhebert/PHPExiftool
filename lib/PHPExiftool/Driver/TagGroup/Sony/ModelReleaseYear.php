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
class ModelReleaseYear extends AbstractTagGroup
{

  protected string $id = 'Sony:ModelReleaseYear';

  protected string $name = 'ModelReleaseYear';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384174
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400a.Sony:ModelReleaseYear',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384407
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400b.Sony:ModelReleaseYear',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384677
       * type : int8u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9400c.Sony:ModelReleaseYear',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
