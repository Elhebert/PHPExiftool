<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FillRect extends AbstractTagGroup
{

  protected string $id = 'PICT:FillRect';

  protected string $name = 'FillRect';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 264773
       * type : Rect
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:FillRect',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
