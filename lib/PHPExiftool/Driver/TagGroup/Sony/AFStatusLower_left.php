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
class AFStatusLower_left extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusLower-left';

    protected string $name = 'AFStatusLower-left';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus15
             * line : 343398
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus15.Sony:AFStatusLower-left',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 345303
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusLower-left',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
