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
class AFMicroAdj extends AbstractTagGroup
{

  protected string $id = 'Sony:AFMicroAdj';

  protected string $name = 'AFMicroAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343027
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFMicroAdj',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343135
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFMicroAdj',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
