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
class Keywords extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 397785
       * type : string
       * writable : true
       * count : 
       * flags : avoid,bag,list
       */
      'id' => 'XMP::acdsee.XMP-acdsee:Keywords',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2369;

}
