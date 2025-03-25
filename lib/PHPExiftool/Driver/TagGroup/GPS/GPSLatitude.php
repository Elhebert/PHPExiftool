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
class GPSLatitude extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSLatitude';

  protected string $name = 'GPSLatitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 131762
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSLatitude',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141370
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSLatitude',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202821
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSLatitude',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301147
       * type : rational64u
       * writable : false
       * count : 3
       * flags : permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSLatitude',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2048;

}
