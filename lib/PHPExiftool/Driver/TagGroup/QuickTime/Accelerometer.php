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
class Accelerometer extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Accelerometer';

    protected string $name = 'Accelerometer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Accelerometer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229284
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:Accelerometer',
            'desc' => [
                'en' => 'Accelerometer',
            ],
        ],
    ];

    protected int $count = 0;
}
