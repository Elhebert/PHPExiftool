<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BytesPerMinute extends AbstractTagGroup
{
    protected string $id = 'Real-RA4:BytesPerMinute';

    protected string $name = 'BytesPerMinute';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bytes Per Minute',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV4
             * line : 232227
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::AudioV4.Real-RA4:BytesPerMinute',
            'desc' => [
                'en' => 'Bytes Per Minute',
            ],
        ],
    ];

    protected int $count = 0;
}
