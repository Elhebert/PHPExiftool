<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateAcquired extends AbstractTagGroup
{
    protected string $id = 'XMP-microsoft:DateAcquired';

    protected string $name = 'DateAcquired';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date Acquired',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::XMP
             * line : 120076
             * type : date
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Microsoft::XMP.XMP-microsoft:DateAcquired',
            'desc' => [
                'en' => 'Date Acquired',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
