<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UniqueMatrixTungsten extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:UniqueMatrixTungsten';

    protected string $name = 'UniqueMatrixTungsten';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unique Matrix Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106391
             * type : rational64s
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:UniqueMatrixTungsten',
            'desc' => [
                'en' => 'Unique Matrix Tungsten',
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
