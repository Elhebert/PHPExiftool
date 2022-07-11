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
class HDR extends AbstractTagGroup
{

  protected string $id = 'Panasonic:HDR';

  protected string $name = 'HDR';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'HDR',
    'fr' => 'HDR auto',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 278062
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:HDR',
      'desc' => [
        'en' => 'HDR',
        'fr' => 'HDR auto',
      ],
    ],
  ];

}
