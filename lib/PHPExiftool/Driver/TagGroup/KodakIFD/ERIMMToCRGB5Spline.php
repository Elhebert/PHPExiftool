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
class ERIMMToCRGB5Spline extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ERIMMToCRGB5Spline';

    protected string $name = 'ERIMMToCRGB5Spline';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ERIMM To CRGB5 Spline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108137
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ERIMMToCRGB5Spline',
            'desc' => [
                'en' => 'ERIMM To CRGB5 Spline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
