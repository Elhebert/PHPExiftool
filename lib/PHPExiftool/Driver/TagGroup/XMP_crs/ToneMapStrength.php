<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneMapStrength extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:ToneMapStrength';

    protected string $name = 'ToneMapStrength';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Map Strength',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287557
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:ToneMapStrength',
            'desc' => [
                'en' => 'Tone Map Strength',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
