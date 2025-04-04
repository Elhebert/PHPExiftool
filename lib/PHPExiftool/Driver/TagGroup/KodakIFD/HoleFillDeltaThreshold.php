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
class HoleFillDeltaThreshold extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:HoleFillDeltaThreshold';

    protected string $name = 'HoleFillDeltaThreshold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hole Fill Delta Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107333
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:HoleFillDeltaThreshold',
            'desc' => [
                'en' => 'Hole Fill Delta Threshold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
