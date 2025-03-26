<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CLModeShootingSpeed extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:CLModeShootingSpeed';

    protected string $name = 'CLModeShootingSpeed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CL Mode Shooting Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167046
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:CLModeShootingSpeed',
            'desc' => [
                'en' => 'CL Mode Shooting Speed',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170540
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:CLModeShootingSpeed',
            'desc' => [
                'en' => 'CL Mode Shooting Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
