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
class HierarchicalKeywords3 extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-kw:HierarchicalKeywords3';

    protected string $name = 'HierarchicalKeywords3';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hierarchical Keywords 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Keywords
             * line : 113765
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords3',
            'desc' => [
                'en' => 'Hierarchical Keywords 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
