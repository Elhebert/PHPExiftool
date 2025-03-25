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
class DownSampleBy2Ver3MPdcr extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DownSampleBy2Ver3MPdcr';

  protected string $name = 'DownSampleBy2Ver3MPdcr';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155457
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DownSampleBy2Ver3MPdcr',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
