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
class DblColDCACThres2 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:DblColDCACThres2';

    protected string $name = 'DblColDCACThres2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dbl Col DCAC Thres 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106835
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:DblColDCACThres2',
            'desc' => [
                'en' => 'Dbl Col DCAC Thres 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
