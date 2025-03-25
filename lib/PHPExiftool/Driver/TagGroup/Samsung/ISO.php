<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO extends AbstractTagGroup
{

  protected string $id = 'Samsung:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::MP4
       * line : 333991
       * type : int32u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Samsung::MP4.Samsung:ISO',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Samsung::Type2
       * line : 335471
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Samsung::Type2.Samsung:ISO',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
