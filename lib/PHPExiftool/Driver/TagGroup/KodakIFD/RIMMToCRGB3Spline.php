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
class RIMMToCRGB3Spline extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:RIMMToCRGB3Spline';

    protected string $name = 'RIMMToCRGB3Spline';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'RIMM To CRGB3 Spline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108272
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:RIMMToCRGB3Spline',
            'desc' => [
                'en' => 'RIMM To CRGB3 Spline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
