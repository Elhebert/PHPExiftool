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
class CCDVersion extends AbstractTagGroup
{
    protected string $id = 'Leica:CCDVersion';

    protected string $name = 'CCDVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'CCD Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 191585
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:CCDVersion',
            'desc' => [
                'en' => 'CCD Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
