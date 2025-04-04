<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecordingTimeYearMonthDay extends AbstractTagGroup
{
    protected string $id = 'Microsoft:RecordingTimeYearMonthDay';

    protected string $name = 'RecordingTimeYearMonthDay';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Recording Time Year Month Day',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120329
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:RecordingTimeYearMonthDay',
            'desc' => [
                'en' => 'Recording Time Year Month Day',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
