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
class HierarchicalKeywords5Applied extends AbstractTagGroup
{
    protected string $id = 'XMP-mwg-kw:HierarchicalKeywords5Applied';

    protected string $name = 'HierarchicalKeywords5Applied';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hierarchical Keywords 5 Applied',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MWG::Keywords
             * line : 113747
             * type : boolean
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords5Applied',
            'desc' => [
                'en' => 'Hierarchical Keywords 5 Applied',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
