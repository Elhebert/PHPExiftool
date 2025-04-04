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
class CRGBToERIMM8Spline extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:CRGBToERIMM8Spline';

    protected string $name = 'CRGBToERIMM8Spline';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CRGB To ERIMM8 Spline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108176
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:CRGBToERIMM8Spline',
            'desc' => [
                'en' => 'CRGB To ERIMM8 Spline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
