<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CustomWBSetting extends AbstractTagGroup
{
    protected string $id = 'Minolta:CustomWBSetting';

    protected string $name = 'CustomWBSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Custom WB Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123403
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:CustomWBSetting',
            'desc' => [
                'en' => 'Custom WB Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
