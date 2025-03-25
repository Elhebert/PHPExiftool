<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OmenInitialIPFStrength extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:OmenInitialIPFStrength';

  protected string $name = 'OmenInitialIPFStrength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155648
       * type : int32s
       * writable : true
       * count : 4
       * flags : permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:OmenInitialIPFStrength',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

  protected int $flags = 2052;

}
