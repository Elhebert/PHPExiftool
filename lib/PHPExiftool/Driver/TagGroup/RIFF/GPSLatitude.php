<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'RIFF:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::UserText
             * line : 231920
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::UserText.RIFF:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
