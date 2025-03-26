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
class SmartRange extends AbstractTagGroup
{
    protected string $id = 'Samsung:SmartRange';

    protected string $name = 'SmartRange';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Smart Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235425
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:SmartRange',
            'desc' => [
                'en' => 'Smart Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
