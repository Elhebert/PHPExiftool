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
class CameraTemperatureMinWarn extends AbstractTagGroup
{

  protected string $id = 'FLIR:CameraTemperatureMinWarn';

  protected string $name = 'CameraTemperatureMinWarn';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122246
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:CameraTemperatureMinWarn',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
