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
class NikonImageSize extends AbstractTagGroup
{
    protected string $id = 'Nikon:NikonImageSize';

    protected string $name = 'NikonImageSize';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Nikon Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 138561
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:NikonImageSize',
            'desc' => [
                'en' => 'Nikon Image Size',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138640
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:NikonImageSize',
            'desc' => [
                'en' => 'Nikon Image Size',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD80
             * line : 140429
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD80.Nikon:NikonImageSize',
            'desc' => [
                'en' => 'Nikon Image Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
