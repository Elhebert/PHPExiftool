<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Kodak_SubIFD3_0x800b extends AbstractTagGroup
{

  protected string $id = 'Kodak:Kodak_SubIFD3_0x800b';

  protected string $name = 'Kodak_SubIFD3_0x800b';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Kodak Sub IFD3 0x800b',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SubIFD3
       * line : 159745
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Kodak::SubIFD3.Kodak:Kodak_SubIFD3_0x800b',
      'desc' => [
        'en' => 'Kodak Sub IFD3 0x800b',
      ],
    ],
  ];

}
