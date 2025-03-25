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
class LensModel extends AbstractTagGroup
{

  protected string $id = 'FLIR:LensModel';

  protected string $name = 'LensModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122277
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:LensModel',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122555
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:LensModel',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::MoreInfo
       * line : 123459
       * type : string
       * writable : false
       * count : 6
       * flags : permanent
       */
      'id' => 'FLIR::MoreInfo.FLIR:LensModel',
      'desc' => [
      ],
    ],
  ];

}
