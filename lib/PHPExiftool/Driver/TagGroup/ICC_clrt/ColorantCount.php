<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_clrt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorantCount extends AbstractTagGroup
{

  protected string $id = 'ICC-clrt:ColorantCount';

  protected string $name = 'ColorantCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::ColorantTable
       * line : 143125
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::ColorantTable.ICC-clrt:ColorantCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
