<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveInputRange extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:ToneCurveInputRange';

    protected string $name = 'ToneCurveInputRange';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Input Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::ToneCurve
             * line : 60199
             * type : int32u
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'CanonVRD::ToneCurve.CanonVRD:ToneCurveInputRange',
            'desc' => [
                'en' => 'Tone Curve Input Range',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
