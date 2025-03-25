<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraColorCalibration14 extends AbstractTagGroup
{

  protected string $id = 'Canon:CameraColorCalibration14';

  protected string $name = 'CameraColorCalibration14';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCalib
       * line : 59025
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration14',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCalib2
       * line : 59134
       * type : int16s
       * writable : true
       * count : 5
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration14',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2084;

}
