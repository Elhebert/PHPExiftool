<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_kw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HierarchicalKeywords2Children extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-kw:HierarchicalKeywords2Children';

  protected string $name = 'HierarchicalKeywords2Children';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Keywords
       * line : 167054
       * type : struct
       * writable : true
       * count : 
       * flags : bag,flattened,list
       */
      'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords2Children',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2368;

}
