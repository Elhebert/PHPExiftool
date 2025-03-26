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
class GPSDataList2 extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSDataList2';

    protected string $name = 'GPSDataList2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Data List 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 228810
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::Main.QuickTime:GPSDataList2',
            'desc' => [
                'en' => 'GPS Data List 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
