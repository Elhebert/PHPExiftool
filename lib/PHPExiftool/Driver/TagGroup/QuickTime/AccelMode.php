<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AccelMode extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AccelMode';

    protected string $name = 'AccelMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Accel Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Accel360Fly
             * line : 216263
             * type : int8u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::Accel360Fly.QuickTime:AccelMode',
            'desc' => [
                'en' => 'Accel Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
