<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FastResetLineTime extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:FastResetLineTime';

    protected string $name = 'FastResetLineTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fast Reset Line Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108464
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:FastResetLineTime',
            'desc' => [
                'en' => 'Fast Reset Line Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
