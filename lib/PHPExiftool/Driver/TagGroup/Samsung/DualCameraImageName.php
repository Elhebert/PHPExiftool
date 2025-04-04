<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DualCameraImageName extends AbstractTagGroup
{
    protected string $id = 'Samsung:DualCameraImageName';

    protected string $name = 'DualCameraImageName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dual Camera Image Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 234368
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Trailer.Samsung:DualCameraImageName',
            'desc' => [
                'en' => 'Dual Camera Image Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
