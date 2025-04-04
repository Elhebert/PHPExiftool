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
class AFStatusBottomHorizontal extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusBottomHorizontal';

    protected string $name = 'AFStatusBottomHorizontal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Bottom Horizontal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus15
             * line : 240411
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus15.Sony:AFStatusBottomHorizontal',
            'desc' => [
                'en' => 'AF Status Bottom Horizontal',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFStatus19
             * line : 240679
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus19.Sony:AFStatusBottomHorizontal',
            'desc' => [
                'en' => 'AF Status Bottom Horizontal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
