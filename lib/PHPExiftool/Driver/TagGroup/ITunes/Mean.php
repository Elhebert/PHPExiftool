<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITunes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Mean extends AbstractTagGroup
{
    protected string $id = 'iTunes:Mean';

    protected string $name = 'Mean';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Mean',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::iTunesInfo
             * line : 230423
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::iTunesInfo.iTunes:Mean',
            'desc' => [
                'en' => 'Mean',
            ],
        ],
    ];

    protected int $count = 0;
}
