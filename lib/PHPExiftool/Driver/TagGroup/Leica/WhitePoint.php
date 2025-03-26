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
class WhitePoint extends AbstractTagGroup
{
    protected string $id = 'Leica:WhitePoint';

    protected string $name = 'WhitePoint';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica9
             * line : 191713
             * type : rational64u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Panasonic::Leica9.Leica:WhitePoint',
            'desc' => [
                'en' => 'White Point',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
