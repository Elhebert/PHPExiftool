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
class Highlights extends AbstractTagGroup
{

  protected string $id = 'Sony:Highlights';

  protected string $name = 'Highlights';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Highlights',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 356263
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:Highlights',
      'desc' => [
        'en' => 'Highlights',
      ],
    ],
  ];

}
