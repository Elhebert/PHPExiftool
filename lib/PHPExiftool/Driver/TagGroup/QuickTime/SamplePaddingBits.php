<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SamplePaddingBits extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SamplePaddingBits';

    protected string $name = 'SamplePaddingBits';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sample Padding Bits',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SampleTable
             * line : 229203
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::SampleTable.QuickTime:SamplePaddingBits',
            'desc' => [
                'en' => 'Sample Padding Bits',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
