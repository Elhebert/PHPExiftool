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
class URL extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:URL';

    protected string $name = 'URL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290362
             * type : struct
             * writable : true
             * count :
             * flags : avoid,bag,list
             */
            'id' => 'XMP::prism.XMP-prism:URL',
            'desc' => [
                'en' => 'URL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2369;
}
