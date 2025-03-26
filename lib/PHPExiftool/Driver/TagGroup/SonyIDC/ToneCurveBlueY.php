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
class ToneCurveBlueY extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:ToneCurveBlueY';

    protected string $name = 'ToneCurveBlueY';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve Blue Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279383
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:ToneCurveBlueY',
            'desc' => [
                'en' => 'Tone Curve Blue Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
