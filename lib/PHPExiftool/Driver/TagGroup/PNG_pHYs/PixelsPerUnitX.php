<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG_pHYs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelsPerUnitX extends AbstractTagGroup
{

  protected string $id = 'PNG-pHYs:PixelsPerUnitX';

  protected string $name = 'PixelsPerUnitX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::PhysicalPixel
       * line : 272660
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::PhysicalPixel.PNG-pHYs:PixelsPerUnitX',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
