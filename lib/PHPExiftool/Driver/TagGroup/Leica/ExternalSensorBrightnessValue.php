<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalSensorBrightnessValue extends AbstractTagGroup
{

  protected string $id = 'Leica:ExternalSensorBrightnessValue';

  protected string $name = 'ExternalSensorBrightnessValue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274665
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica2.Leica:ExternalSensorBrightnessValue',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 274949
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica6.Leica:ExternalSensorBrightnessValue',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 274992
       * type : rational64s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Leica9.Leica:ExternalSensorBrightnessValue',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279647
       * type : int32s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Panasonic::Subdir.Leica:ExternalSensorBrightnessValue',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
