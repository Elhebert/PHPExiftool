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
class ProductionDate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ProductionDate';

    protected string $name = 'ProductionDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Production Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::MetaData
             * line : 228943
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'QuickTime::MetaData.QuickTime:ProductionDate',
            'desc' => [
                'en' => 'Production Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
