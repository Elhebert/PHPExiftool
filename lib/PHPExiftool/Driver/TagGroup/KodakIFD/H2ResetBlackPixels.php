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
class H2ResetBlackPixels extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:H2ResetBlackPixels';

    protected string $name = 'H2ResetBlackPixels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'H2 Reset Black Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108488
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:H2ResetBlackPixels',
            'desc' => [
                'en' => 'H2 Reset Black Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
