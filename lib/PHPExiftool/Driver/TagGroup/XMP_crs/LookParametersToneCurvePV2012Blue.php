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
class LookParametersToneCurvePV2012Blue extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:LookParametersToneCurvePV2012Blue';

    protected string $name = 'LookParametersToneCurvePV2012Blue';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Look Parameters Tone Curve PV2012 Blue',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286038
             * type : string
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::crs.XMP-crs:LookParametersToneCurvePV2012Blue',
            'desc' => [
                'en' => 'Look Parameters Tone Curve PV2012 Blue',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
