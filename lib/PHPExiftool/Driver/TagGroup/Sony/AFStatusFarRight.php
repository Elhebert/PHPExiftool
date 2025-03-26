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
class AFStatusFarRight extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusFarRight';

    protected string $name = 'AFStatusFarRight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Far Right',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus15
             * line : 240455
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus15.Sony:AFStatusFarRight',
            'desc' => [
                'en' => 'AF Status Far Right',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 242255
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusFarRight',
            'desc' => [
                'en' => 'AF Status Far Right',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
