<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveSRGB extends AbstractTagGroup
{
    protected string $id = 'Samsung:ToneCurveSRGB';

    protected string $name = 'ToneCurveSRGB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve SRGB',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235499
             * type : int32u
             * writable : true
             * count : 23
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:ToneCurveSRGB',
            'desc' => [
                'en' => 'Tone Curve SRGB',
            ],
        ],
    ];

    protected int $count = 23;

    protected int $flags = 2052;
}
