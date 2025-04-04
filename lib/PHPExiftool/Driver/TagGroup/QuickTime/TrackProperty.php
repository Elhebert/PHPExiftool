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
class TrackProperty extends AbstractTagGroup
{
    protected string $id = 'QuickTime:TrackProperty';

    protected string $name = 'TrackProperty';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Track Property',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::MetaData
             * line : 228952
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::MetaData.QuickTime:TrackProperty',
            'desc' => [
                'en' => 'Track Property',
            ],
        ],
    ];

    protected int $count = 0;
}
