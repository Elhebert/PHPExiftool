<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaXPosition extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFAreaXPosition';

  protected string $name = 'AFAreaXPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189956
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190012
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190979
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
