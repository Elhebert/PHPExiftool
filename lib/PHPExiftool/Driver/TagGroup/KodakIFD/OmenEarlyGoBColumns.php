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
class OmenEarlyGoBColumns extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OmenEarlyGoBColumns';

    protected string $name = 'OmenEarlyGoBColumns';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Omen Early Go B Columns',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106898
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:OmenEarlyGoBColumns',
            'desc' => [
                'en' => 'Omen Early Go B Columns',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
