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
class MariahThresholdsNormal extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:MariahThresholdsNormal';

    protected string $name = 'MariahThresholdsNormal';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Mariah Thresholds Normal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108044
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:MariahThresholdsNormal',
            'desc' => [
                'en' => 'Mariah Thresholds Normal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
