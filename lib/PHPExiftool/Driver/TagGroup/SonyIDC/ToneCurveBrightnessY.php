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
class ToneCurveBrightnessY extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:ToneCurveBrightnessY';

    protected string $name = 'ToneCurveBrightnessY';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Brightness Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279374
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:ToneCurveBrightnessY',
            'desc' => [
                'en' => 'Tone Curve Brightness Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
