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
class ExposureDifference extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExposureDifference';

    protected string $name = 'ExposureDifference';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Difference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132872
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ExposureDifference',
            'desc' => [
                'en' => 'Exposure Difference',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
