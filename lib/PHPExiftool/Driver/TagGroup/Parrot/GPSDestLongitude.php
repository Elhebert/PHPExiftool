<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDestLongitude extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSDestLongitude';

  protected string $name = 'GPSDestLongitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::Automation
       * line : 281876
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::Automation.Parrot:GPSDestLongitude',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
