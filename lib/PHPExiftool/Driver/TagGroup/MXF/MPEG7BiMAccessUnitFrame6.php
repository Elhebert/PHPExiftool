<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPEG7BiMAccessUnitFrame6 extends AbstractTagGroup
{

  protected string $id = 'MXF:MPEG7BiMAccessUnitFrame6';

  protected string $name = 'MPEG7BiMAccessUnitFrame6';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MPEG7 Bi M Access Unit Frame 6',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172073
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:MPEG7BiMAccessUnitFrame6',
      'desc' => [
        'en' => 'MPEG7 Bi M Access Unit Frame 6',
      ],
    ],
  ];

}
