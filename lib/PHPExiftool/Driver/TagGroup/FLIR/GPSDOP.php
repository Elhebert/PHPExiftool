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
class GPSDOP extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSDOP';

  protected string $name = 'GPSDOP';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 122855
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSDOP',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
