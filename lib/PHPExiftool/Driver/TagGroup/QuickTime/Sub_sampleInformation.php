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
class Sub_sampleInformation extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Sub-sampleInformation';

    protected string $name = 'Sub-sampleInformation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sub-sample Information',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SampleTable
             * line : 229245
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::SampleTable.QuickTime:Sub-sampleInformation',
            'desc' => [
                'en' => 'Sub-sample Information',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
