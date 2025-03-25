<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaYPositions extends AbstractTagGroup
{

  protected string $id = 'Canon:AFAreaYPositions';

  protected string $name = 'AFAreaYPositions';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4083
       * type : int16s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::AFInfo.Canon:AFAreaYPositions',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4243
       * type : int16s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::AFInfo2.Canon:AFAreaYPositions',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
