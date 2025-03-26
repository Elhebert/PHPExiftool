<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoom extends AbstractTagGroup
{
    protected string $id = 'Sony:DigitalZoom';

    protected string $name = 'DigitalZoom';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270771
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 270944
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
