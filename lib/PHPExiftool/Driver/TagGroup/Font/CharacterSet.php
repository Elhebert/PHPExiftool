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
class CharacterSet extends AbstractTagGroup
{

  protected string $id = 'Font:CharacterSet';

  protected string $name = 'CharacterSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 127715
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:CharacterSet',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Font::PFM
       * line : 128055
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PFM.Font:CharacterSet',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
