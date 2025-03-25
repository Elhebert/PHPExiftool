<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VibrationReduction extends AbstractTagGroup
{

  protected string $id = 'Nikon:VibrationReduction';

  protected string $name = 'VibrationReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205375
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205411
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205452
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206349
       * type : ?
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208422
       * type : ?
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::VRInfo
       * line : 209572
       * type : int8u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Nikon::VRInfo.Nikon:VibrationReduction',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
