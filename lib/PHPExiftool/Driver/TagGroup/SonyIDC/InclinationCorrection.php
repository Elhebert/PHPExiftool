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
class InclinationCorrection extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:InclinationCorrection';

    protected string $name = 'InclinationCorrection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Inclination Correction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279397
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:InclinationCorrection',
            'desc' => [
                'en' => 'Inclination Correction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
