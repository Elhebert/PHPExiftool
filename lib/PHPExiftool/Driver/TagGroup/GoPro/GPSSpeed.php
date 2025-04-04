<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeed extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSSpeed';

    protected string $name = 'GPSSpeed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPS5
             * line : 97852
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPS5.GoPro:GPSSpeed',
            'desc' => [
                'en' => 'GPS Speed',
            ],
        ],
    ];

    protected int $count = 0;
}
