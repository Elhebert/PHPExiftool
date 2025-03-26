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
class ViewingMode extends AbstractTagGroup
{
    protected string $id = 'Sony:ViewingMode';

    protected string $name = 'ViewingMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Viewing Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244959
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ViewingMode',
            'desc' => [
                'en' => 'Viewing Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251397
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ViewingMode',
            'desc' => [
                'en' => 'Viewing Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
