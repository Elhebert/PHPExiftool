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
class WB_RGBCoeffsFluorescent extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:WB_RGBCoeffsFluorescent';

    protected string $name = 'WB_RGBCoeffsFluorescent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB RGB Coeffs Fluorescent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106478
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:WB_RGBCoeffsFluorescent',
            'desc' => [
                'en' => 'WB RGB Coeffs Fluorescent',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
