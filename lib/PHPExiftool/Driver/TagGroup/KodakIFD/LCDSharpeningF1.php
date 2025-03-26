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
class LCDSharpeningF1 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:LCDSharpeningF1';

    protected string $name = 'LCDSharpeningF1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'LCD Sharpening F1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107891
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:LCDSharpeningF1',
            'desc' => [
                'en' => 'LCD Sharpening F1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
