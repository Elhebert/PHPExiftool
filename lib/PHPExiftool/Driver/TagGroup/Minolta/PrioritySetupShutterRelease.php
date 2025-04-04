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
class PrioritySetupShutterRelease extends AbstractTagGroup
{
    protected string $id = 'Minolta:PrioritySetupShutterRelease';

    protected string $name = 'PrioritySetupShutterRelease';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Priority Setup Shutter Release',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123265
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:PrioritySetupShutterRelease',
            'desc' => [
                'en' => 'Priority Setup Shutter Release',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
