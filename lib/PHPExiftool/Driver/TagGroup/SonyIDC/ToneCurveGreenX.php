<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveGreenX extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:ToneCurveGreenX';

    protected string $name = 'ToneCurveGreenX';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Green X',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279368
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:ToneCurveGreenX',
            'desc' => [
                'en' => 'Tone Curve Green X',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
