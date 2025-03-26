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
class GPSLog extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSLog';

    protected string $name = 'GPSLog';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Log',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 228858
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Main.QuickTime:GPSLog',
            'desc' => [
                'en' => 'GPS Log',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Pittasoft
             * line : 229073
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Pittasoft.QuickTime:GPSLog',
            'desc' => [
                'en' => 'GPS Log',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
