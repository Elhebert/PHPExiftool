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
class CameraModel extends AbstractTagGroup
{

  protected string $id = 'FLIR:CameraModel';

  protected string $name = 'CameraModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Model',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122598
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:CameraModel',
      'desc' => [
        'en' => 'Camera Model',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122873
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:CameraModel',
      'desc' => [
        'en' => 'Camera Model',
      ],
    ],
  ];

}
