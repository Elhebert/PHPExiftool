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
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 122837
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSAltitude',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::GPS_UUID
       * line : 123161
       * type : float
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'FLIR::GPS_UUID.FLIR:GPSAltitude',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
