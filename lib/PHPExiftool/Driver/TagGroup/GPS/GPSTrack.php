<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTrack extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSTrack';

  protected string $name = 'GPSTrack';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132239
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSTrack',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141829
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSTrack',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
