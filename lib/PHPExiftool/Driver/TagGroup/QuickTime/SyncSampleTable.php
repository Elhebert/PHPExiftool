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
class SyncSampleTable extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SyncSampleTable';

    protected string $name = 'SyncSampleTable';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sync Sample Table',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SampleTable
             * line : 229230
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::SampleTable.QuickTime:SyncSampleTable',
            'desc' => [
                'en' => 'Sync Sample Table',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
