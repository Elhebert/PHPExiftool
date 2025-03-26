<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'Samsung:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Space',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235414
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
