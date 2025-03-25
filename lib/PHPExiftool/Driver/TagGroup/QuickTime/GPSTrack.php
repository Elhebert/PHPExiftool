<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTrack extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSTrack';

  protected string $name = 'GPSTrack';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GPS360Fly
       * line : 313201
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::GPS360Fly.QuickTime:GPSTrack',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::RVMI_gReV
       * line : 324334
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSTrack',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::Stream
       * line : 324793
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:GPSTrack',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
