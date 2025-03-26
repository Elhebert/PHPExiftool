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
class BlackLevel extends AbstractTagGroup
{
    protected string $id = 'Nikon:BlackLevel';

    protected string $name = 'BlackLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Black Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalanceC
             * line : 130181
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ColorBalanceC.Nikon:BlackLevel',
            'desc' => [
                'en' => 'Black Level',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::Main
             * line : 133070
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:BlackLevel',
            'desc' => [
                'en' => 'Black Level',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
