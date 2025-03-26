<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SRF_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxFocalLength extends AbstractTagGroup
{
    protected string $id = 'SRF#:MaxFocalLength';

    protected string $name = 'MaxFocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Max Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SRF2
             * line : 252008
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SRF2.SRF#:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
