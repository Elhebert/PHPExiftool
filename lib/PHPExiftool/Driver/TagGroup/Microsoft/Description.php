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
class Description extends AbstractTagGroup
{
    protected string $id = 'Microsoft:Description';

    protected string $name = 'Description';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120218
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120735
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
        2 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120984
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
