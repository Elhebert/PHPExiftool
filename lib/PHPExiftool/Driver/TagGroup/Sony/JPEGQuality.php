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
class JPEGQuality extends AbstractTagGroup
{
    protected string $id = 'Sony:JPEGQuality';

    protected string $name = 'JPEGQuality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'JPEG Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 250512
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:JPEGQuality',
            'desc' => [
                'en' => 'JPEG Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
