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
class ToneCurvePV2012Red extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:ToneCurvePV2012Red';

    protected string $name = 'ToneCurvePV2012Red';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve PV2012 Red',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287551
             * type : string
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::crs.XMP-crs:ToneCurvePV2012Red',
            'desc' => [
                'en' => 'Tone Curve PV2012 Red',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
