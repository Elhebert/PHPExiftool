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
class AFStatusActiveSensor extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusActiveSensor';

  protected string $name = 'AFStatusActiveSensor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 340842
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 342783
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345264
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345768
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346181
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346509
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusActiveSensor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
