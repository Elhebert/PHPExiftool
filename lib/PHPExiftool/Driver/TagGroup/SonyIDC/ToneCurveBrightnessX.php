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
class ToneCurveBrightnessX extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:ToneCurveBrightnessX';

    protected string $name = 'ToneCurveBrightnessX';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Brightness X',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279362
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:ToneCurveBrightnessX',
            'desc' => [
                'en' => 'Tone Curve Brightness X',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
