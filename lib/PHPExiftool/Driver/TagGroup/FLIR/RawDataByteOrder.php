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
class RawDataByteOrder extends AbstractTagGroup
{

  protected string $id = 'FLIR:RawDataByteOrder';

  protected string $name = 'RawDataByteOrder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::AFF1
       * line : 122127
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::AFF1.FLIR:RawDataByteOrder',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::AFF5
       * line : 122153
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::AFF5.FLIR:RawDataByteOrder',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::RawData
       * line : 123676
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::RawData.FLIR:RawDataByteOrder',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
