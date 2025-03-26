<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Bitrate extends AbstractTagGroup
{
    protected string $id = 'Microsoft:Bitrate';

    protected string $name = 'Bitrate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bitrate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120158
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Bitrate',
            'desc' => [
                'en' => 'Bitrate',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 121026
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Bitrate',
            'desc' => [
                'en' => 'Bitrate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
