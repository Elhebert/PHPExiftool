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
class HierarchicalKeywords extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-kw:HierarchicalKeywords';

  protected string $name = 'HierarchicalKeywords';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Hierarchical Keywords',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Keywords
       * line : 167381
       * type : struct
       * writable : true
       * count : 
       * flags : Bag,Flattened,List
       */
      'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords',
      'desc' => [
        'en' => 'Hierarchical Keywords',
      ],
    ],
  ];

}
