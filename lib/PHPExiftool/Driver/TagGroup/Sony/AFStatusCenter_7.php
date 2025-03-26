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
class AFStatusCenter_7 extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusCenter-7';

    protected string $name = 'AFStatusCenter-7';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Center-7',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 242134
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusCenter-7',
            'desc' => [
                'en' => 'AF Status Center-7',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
