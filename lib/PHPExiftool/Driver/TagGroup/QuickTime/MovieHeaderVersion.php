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
class MovieHeaderVersion extends AbstractTagGroup
{
    protected string $id = 'QuickTime:MovieHeaderVersion';

    protected string $name = 'MovieHeaderVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Movie Header Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::MovieHeader
             * line : 229008
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::MovieHeader.QuickTime:MovieHeaderVersion',
            'desc' => [
                'en' => 'Movie Header Version',
            ],
        ],
    ];

    protected int $count = 0;
}
