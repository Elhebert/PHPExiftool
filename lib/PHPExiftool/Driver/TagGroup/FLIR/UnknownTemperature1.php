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
class UnknownTemperature1 extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownTemperature1';

  protected string $name = 'UnknownTemperature1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MoreInfo
       * line : 123468
       * type : float
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'FLIR::MoreInfo.FLIR:UnknownTemperature1',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
