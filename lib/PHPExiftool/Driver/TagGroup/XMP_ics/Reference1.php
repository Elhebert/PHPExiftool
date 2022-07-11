<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reference1 extends AbstractTagGroup
{

  protected string $id = 'XMP-ics:Reference1';

  protected string $name = 'Reference1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reference 1',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ics
       * line : 409172
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::ics.XMP-ics:Reference1',
      'desc' => [
        'en' => 'Reference 1',
      ],
    ],
  ];

}
