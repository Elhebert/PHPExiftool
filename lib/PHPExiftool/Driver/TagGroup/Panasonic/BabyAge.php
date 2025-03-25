<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BabyAge extends AbstractTagGroup
{

  protected string $id = 'Panasonic:BabyAge';

  protected string $name = 'BabyAge';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 276646
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:BabyAge',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 278665
       * type : string
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:BabyAge',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
