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
class LensPartNumber extends AbstractTagGroup
{

  protected string $id = 'FLIR:LensPartNumber';

  protected string $name = 'LensPartNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122286
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:LensPartNumber',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122564
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:LensPartNumber',
      'desc' => [
      ],
    ],
  ];

}
