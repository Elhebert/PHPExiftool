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
class IntelligentD_Range extends AbstractTagGroup
{

  protected string $id = 'Panasonic:IntelligentD-Range';

  protected string $name = 'IntelligentD-Range';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277482
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Main.Panasonic:IntelligentD-Range',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
