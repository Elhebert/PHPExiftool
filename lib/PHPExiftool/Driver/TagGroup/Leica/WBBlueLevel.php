<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBBlueLevel extends AbstractTagGroup
{
    protected string $id = 'Leica:WBBlueLevel';

    protected string $name = 'WBBlueLevel';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Blue Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 191571
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:WBBlueLevel',
            'desc' => [
                'en' => 'WB Blue Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
