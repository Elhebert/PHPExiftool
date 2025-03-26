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
class CmdDialsReverseRotation extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:CmdDialsReverseRotation';

    protected string $name = 'CmdDialsReverseRotation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cmd Dials Reverse Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167749
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:CmdDialsReverseRotation',
            'desc' => [
                'en' => 'Cmd Dials Reverse Rotation',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 167760
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:CmdDialsReverseRotation',
            'desc' => [
                'en' => 'Cmd Dials Reverse Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
