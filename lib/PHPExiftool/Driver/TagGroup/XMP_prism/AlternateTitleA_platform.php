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
class AlternateTitleA_platform extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:AlternateTitleA-platform';

    protected string $name = 'AlternateTitleA-platform';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Alternate Title A-platform',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290026
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::prism.XMP-prism:AlternateTitleA-platform',
            'desc' => [
                'en' => 'Alternate Title A-platform',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
