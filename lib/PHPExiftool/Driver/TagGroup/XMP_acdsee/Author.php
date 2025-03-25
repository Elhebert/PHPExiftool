<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_acdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Author extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:Author';

  protected string $name = 'Author';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 397703
       * type : string
       * writable : true
       * count : 
       * flags : avoid
       */
      'id' => 'XMP::acdsee.XMP-acdsee:Author',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2049;

}
