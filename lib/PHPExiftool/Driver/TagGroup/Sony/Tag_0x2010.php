<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Tag_0x2010 extends AbstractTagGroup
{

  protected string $id = 'Sony:Tag_0x2010';

  protected string $name = 'Tag_0x2010';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 354377
       * type : ?
       * writable : false
       * count : 
       * flags : permanent,unknown
       */
      'id' => 'Sony::Main.Sony:Tag_0x2010',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 36;

}
