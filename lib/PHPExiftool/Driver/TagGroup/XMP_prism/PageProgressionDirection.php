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
class PageProgressionDirection extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:PageProgressionDirection';

    protected string $name = 'PageProgressionDirection';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Page Progression Direction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290255
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prism.XMP-prism:PageProgressionDirection',
            'desc' => [
                'en' => 'Page Progression Direction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
