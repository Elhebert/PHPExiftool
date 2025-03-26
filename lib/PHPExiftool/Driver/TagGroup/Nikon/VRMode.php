<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VRMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:VRMode';

    protected string $name = 'VRMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'VR Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136018
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:VRMode',
            'desc' => [
                'en' => 'VR Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::VRInfo
             * line : 141333
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::VRInfo.Nikon:VRMode',
            'desc' => [
                'en' => 'VR Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::VRInfo
             * line : 141347
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::VRInfo.Nikon:VRMode',
            'desc' => [
                'en' => 'VR Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
