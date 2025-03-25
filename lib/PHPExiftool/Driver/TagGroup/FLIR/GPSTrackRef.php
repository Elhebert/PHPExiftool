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
class GPSTrackRef extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSTrackRef';

  protected string $name = 'GPSTrackRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 122947
       * type : string
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSTrackRef',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

}
