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
class Channels extends AbstractTagGroup
{
    protected string $id = 'Microsoft:Channels';

    protected string $name = 'Channels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Channels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120179
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Channels',
            'desc' => [
                'en' => 'Channels',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 121035
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Channels',
            'desc' => [
                'en' => 'Channels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
