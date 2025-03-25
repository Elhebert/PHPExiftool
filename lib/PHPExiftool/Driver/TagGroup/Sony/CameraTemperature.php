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
class CameraTemperature extends AbstractTagGroup
{

  protected string $id = 'Sony:CameraTemperature';

  protected string $name = 'CameraTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PIC
       * line : 361231
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::PIC.Sony:CameraTemperature',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9403
       * line : 384810
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9403.Sony:CameraTemperature',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
