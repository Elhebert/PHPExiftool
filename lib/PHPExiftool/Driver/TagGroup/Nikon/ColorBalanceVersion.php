<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorBalanceVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:ColorBalanceVersion';

    protected string $name = 'ColorBalanceVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Balance Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceB
             * line : 130147
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ColorBalanceB.Nikon:ColorBalanceVersion',
            'desc' => [
                'en' => 'Color Balance Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ColorBalanceC
             * line : 130178
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ColorBalanceC.Nikon:ColorBalanceVersion',
            'desc' => [
                'en' => 'Color Balance Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ColorBalanceUnknown
             * line : 130221
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ColorBalanceUnknown.Nikon:ColorBalanceVersion',
            'desc' => [
                'en' => 'Color Balance Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
