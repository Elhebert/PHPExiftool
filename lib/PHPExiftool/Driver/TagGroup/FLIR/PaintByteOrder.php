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
class PaintByteOrder extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaintByteOrder';

  protected string $name = 'PaintByteOrder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaintData
       * line : 123478
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PaintData.FLIR:PaintByteOrder',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
