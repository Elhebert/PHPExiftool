<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FullName extends AbstractTagGroup
{

  protected string $id = 'Font:FullName';

  protected string $name = 'FullName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 127772
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:FullName',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Font::PSInfo
       * line : 128149
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PSInfo.Font:FullName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
