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
class HoleFillDarkDeltaThreshold extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:HoleFillDarkDeltaThreshold';

    protected string $name = 'HoleFillDarkDeltaThreshold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hole Fill Dark Delta Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107357
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:HoleFillDarkDeltaThreshold',
            'desc' => [
                'en' => 'Hole Fill Dark Delta Threshold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
