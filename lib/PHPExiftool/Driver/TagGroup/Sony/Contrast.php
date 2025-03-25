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
class Contrast extends AbstractTagGroup
{

  protected string $id = 'Sony:Contrast';

  protected string $name = 'Contrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347428
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:Contrast',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348916
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:Contrast',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 353876
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:Contrast',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
