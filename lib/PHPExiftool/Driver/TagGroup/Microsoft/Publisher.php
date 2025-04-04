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
class Publisher extends AbstractTagGroup
{
    protected string $id = 'Microsoft:Publisher';

    protected string $name = 'Publisher';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Publisher',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120651
             * type : Unicode
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Publisher',
            'desc' => [
                'en' => 'Publisher',
            ],
        ],
        1 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 121074
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:Publisher',
            'desc' => [
                'en' => 'Publisher',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
