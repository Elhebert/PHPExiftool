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
class DynamicRange extends AbstractTagGroup
{
    protected string $id = 'iTunes:DynamicRange';

    protected string $name = 'DynamicRange';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dynamic Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::iTunesInfo
             * line : 230366
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::iTunesInfo.iTunes:DynamicRange',
            'desc' => [
                'en' => 'Dynamic Range',
            ],
        ],
    ];

    protected int $count = 0;
}
