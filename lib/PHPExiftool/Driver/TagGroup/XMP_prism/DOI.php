<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DOI extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:DOI';

    protected string $name = 'DOI';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Object Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290100
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prism.XMP-prism:DOI',
            'desc' => [
                'en' => 'Digital Object Identifier',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
