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
class AFStatusLeft extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusLeft';

  protected string $name = 'AFStatusLeft';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343384
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusLeft',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345289
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFStatusLeft',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345894
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusLeft',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346607
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusLeft',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
