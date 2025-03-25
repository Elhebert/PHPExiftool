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
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 131910
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSAltitude',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141518
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSAltitude',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202969
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSAltitude',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301295
       * type : rational64u
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSAltitude',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
