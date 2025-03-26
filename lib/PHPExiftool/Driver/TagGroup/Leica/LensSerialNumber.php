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
class LensSerialNumber extends AbstractTagGroup
{
    protected string $id = 'Leica:LensSerialNumber';

    protected string $name = 'LensSerialNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica6
             * line : 191677
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica6.Leica:LensSerialNumber',
            'desc' => [
                'en' => 'Lens Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
