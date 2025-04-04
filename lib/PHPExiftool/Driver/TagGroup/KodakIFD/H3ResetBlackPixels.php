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
class H3ResetBlackPixels extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:H3ResetBlackPixels';

    protected string $name = 'H3ResetBlackPixels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'H3 Reset Black Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108491
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:H3ResetBlackPixels',
            'desc' => [
                'en' => 'H3 Reset Black Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
