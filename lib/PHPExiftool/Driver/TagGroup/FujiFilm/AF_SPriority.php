<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AF_SPriority extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:AF-SPriority';

    protected string $name = 'AF-SPriority';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF-S Priority',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::PrioritySettings
             * line : 90496
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::PrioritySettings.FujiFilm:AF-SPriority',
            'desc' => [
                'en' => 'AF-S Priority',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
