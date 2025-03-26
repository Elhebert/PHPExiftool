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
class ImageCount extends AbstractTagGroup
{
    protected string $id = 'Sony:ImageCount';

    protected string $name = 'ImageCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreInfo0201
             * line : 250869
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo0201.Sony:ImageCount',
            'desc' => [
                'en' => 'Image Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
