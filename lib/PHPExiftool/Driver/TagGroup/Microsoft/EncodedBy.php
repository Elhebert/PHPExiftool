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
class EncodedBy extends AbstractTagGroup
{
    protected string $id = 'Microsoft:EncodedBy';

    protected string $name = 'EncodedBy';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Encoded By',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120512
             * type : Unicode
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:EncodedBy',
            'desc' => [
                'en' => 'Encoded By',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 121083
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:EncodedBy',
            'desc' => [
                'en' => 'Encoded By',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
