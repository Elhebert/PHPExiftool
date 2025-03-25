<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelativeHumidity extends AbstractTagGroup
{

  protected string $id = 'FLIR:RelativeHumidity';

  protected string $name = 'RelativeHumidity';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122204
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:RelativeHumidity',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122602
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:RelativeHumidity',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Params
       * line : 123586
       * type : float
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'FLIR::Params.FLIR:RelativeHumidity',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
