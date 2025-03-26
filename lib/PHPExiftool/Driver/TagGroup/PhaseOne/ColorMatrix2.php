<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMatrix2 extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:ColorMatrix2';

    protected string $name = 'ColorMatrix2';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Matrix 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::Main
             * line : 210852
             * type : float
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'PhaseOne::Main.PhaseOne:ColorMatrix2',
            'desc' => [
                'en' => 'Color Matrix 2',
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
