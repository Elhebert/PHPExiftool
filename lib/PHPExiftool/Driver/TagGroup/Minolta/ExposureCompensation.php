<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'Minolta:ExposureCompensation';

  protected string $name = 'ExposureCompensation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177472
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179022
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179768
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::MOV1
       * line : 182617
       * type : rational64s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::MOV1.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::MOV2
       * line : 182714
       * type : rational64s
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::MOV2.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 186604
       * type : int8s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ExposureCompensation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
