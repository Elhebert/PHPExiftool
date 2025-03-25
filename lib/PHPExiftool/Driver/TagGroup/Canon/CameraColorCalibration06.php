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
class CameraColorCalibration06 extends AbstractTagGroup
{

  protected string $id = 'Canon:CameraColorCalibration06';

  protected string $name = 'CameraColorCalibration06';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCalib
       * line : 58969
       * type : int16s
       * writable : true
       * count : 4
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration06',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCalib2
       * line : 59078
       * type : int16s
       * writable : true
       * count : 5
       * flags : permanent,unknown
       */
      'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration06',
      'desc' => [
      ],
    ],
  ];

  protected int $flags = 2084;

}
