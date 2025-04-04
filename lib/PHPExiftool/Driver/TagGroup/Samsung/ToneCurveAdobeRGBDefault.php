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
class ToneCurveAdobeRGBDefault extends AbstractTagGroup
{
    protected string $id = 'Samsung:ToneCurveAdobeRGBDefault';

    protected string $name = 'ToneCurveAdobeRGBDefault';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Adobe RGB Default',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235496
             * type : int32u
             * writable : true
             * count : 23
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:ToneCurveAdobeRGBDefault',
            'desc' => [
                'en' => 'Tone Curve Adobe RGB Default',
            ],
        ],
    ];

    protected int $count = 23;

    protected int $flags = 2052;
}
