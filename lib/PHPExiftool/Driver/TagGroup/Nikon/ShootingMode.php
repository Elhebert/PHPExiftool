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
class ShootingMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:ShootingMode';

    protected string $name = 'ShootingMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shooting Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133146
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ShootingMode',
            'desc' => [
                'en' => 'Shooting Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
