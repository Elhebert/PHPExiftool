<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Trapped extends AbstractTagGroup
{

  protected string $id = 'PDF:Trapped';

  protected string $name = 'Trapped';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Info
       * line : 264270
       * type : string
       * writable : true
       * count : 
       * flags : unsafe
       */
      'id' => 'PDF::Info.PDF:Trapped',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2064;

}
