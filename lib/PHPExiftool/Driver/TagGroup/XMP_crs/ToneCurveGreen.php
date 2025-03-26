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
class ToneCurveGreen extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:ToneCurveGreen';

    protected string $name = 'ToneCurveGreen';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 404478
             * type : string
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::crs.XMP-crs:ToneCurveGreen',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
