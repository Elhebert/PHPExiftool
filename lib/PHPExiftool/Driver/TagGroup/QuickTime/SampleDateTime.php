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
class SampleDateTime extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SampleDateTime';

    protected string $name = 'SampleDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sample Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229381
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:SampleDateTime',
            'desc' => [
                'en' => 'Sample Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
