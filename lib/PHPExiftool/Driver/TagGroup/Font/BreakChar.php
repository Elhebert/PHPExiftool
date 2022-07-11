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
class BreakChar extends AbstractTagGroup
{

  protected string $id = 'Font:BreakChar';

  protected string $name = 'BreakChar';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Break Char',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::PFM
       * line : 128442
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PFM.Font:BreakChar',
      'desc' => [
        'en' => 'Break Char',
      ],
    ],
  ];

}
