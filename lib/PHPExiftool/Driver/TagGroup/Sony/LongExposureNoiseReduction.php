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
class LongExposureNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Sony:LongExposureNoiseReduction';

  protected string $name = 'LongExposureNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347535
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348966
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350656
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 353947
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Main.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360475
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::MoreSettings.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387774
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LongExposureNoiseReduction',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
