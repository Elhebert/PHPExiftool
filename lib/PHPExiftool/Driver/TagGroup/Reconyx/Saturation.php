<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Saturation extends AbstractTagGroup
{
    protected string $id = 'Reconyx:Saturation';

    protected string $name = 'Saturation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232692
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232944
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
