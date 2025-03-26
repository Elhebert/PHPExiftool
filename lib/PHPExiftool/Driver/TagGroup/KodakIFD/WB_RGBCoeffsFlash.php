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
class WB_RGBCoeffsFlash extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:WB_RGBCoeffsFlash';

    protected string $name = 'WB_RGBCoeffsFlash';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB RGB Coeffs Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106481
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:WB_RGBCoeffsFlash',
            'desc' => [
                'en' => 'WB RGB Coeffs Flash',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
