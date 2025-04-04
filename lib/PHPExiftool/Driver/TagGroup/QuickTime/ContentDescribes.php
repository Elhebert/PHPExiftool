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
class ContentDescribes extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ContentDescribes';

    protected string $name = 'ContentDescribes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Content Describes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemRef
             * line : 228558
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemRef.QuickTime:ContentDescribes',
            'desc' => [
                'en' => 'Content Describes',
            ],
        ],
    ];

    protected int $count = 0;
}
