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
class Channel3LagKernel extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:Channel3LagKernel';

  protected string $name = 'Channel3LagKernel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Channel 3 Lag Kernel',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156510
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:Channel3LagKernel',
      'desc' => [
        'en' => 'Channel 3 Lag Kernel',
      ],
    ],
  ];

}
