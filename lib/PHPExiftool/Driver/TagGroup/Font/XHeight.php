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
class XHeight extends AbstractTagGroup
{

  protected string $id = 'Font:XHeight';

  protected string $name = 'XHeight';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 127806
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:XHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
