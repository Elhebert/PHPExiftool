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
class LuminanceCurveLimits extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:LuminanceCurveLimits';

    protected string $name = 'LuminanceCurveLimits';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Luminance Curve Limits',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver1
             * line : 60380
             * type : int16u
             * writable : true
             * count : 4
             * flags :
             */
            'id' => 'CanonVRD::Ver1.CanonVRD:LuminanceCurveLimits',
            'desc' => [
                'en' => 'Luminance Curve Limits',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2048;
}
