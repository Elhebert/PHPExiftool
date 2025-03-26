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
class RGBtoeV4 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:RGBtoeV4';

    protected string $name = 'RGBtoeV4';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'RG Btoe V4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107948
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:RGBtoeV4',
            'desc' => [
                'en' => 'RG Btoe V4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
