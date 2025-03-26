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
class CompositionToDecodeTimelineMapping extends AbstractTagGroup
{
    protected string $id = 'QuickTime:CompositionToDecodeTimelineMapping';

    protected string $name = 'CompositionToDecodeTimelineMapping';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Composition To Decode Timeline Mapping',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SampleTable
             * line : 229197
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::SampleTable.QuickTime:CompositionToDecodeTimelineMapping',
            'desc' => [
                'en' => 'Composition To Decode Timeline Mapping',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
