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
class SharpnessSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:SharpnessSetting';

    protected string $name = 'SharpnessSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244639
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:SharpnessSetting',
            'desc' => [
                'en' => 'Sharpness Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251099
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:SharpnessSetting',
            'desc' => [
                'en' => 'Sharpness Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
