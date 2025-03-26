<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:ColorMode';

    protected string $name = 'ColorMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 126986
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        1 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127036
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
