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
class AFStatusRightHorizontal extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusRightHorizontal';

    protected string $name = 'AFStatusRightHorizontal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Right Horizontal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus19
             * line : 240778
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus19.Sony:AFStatusRightHorizontal',
            'desc' => [
                'en' => 'AF Status Right Horizontal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
