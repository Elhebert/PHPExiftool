<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserProfile extends AbstractTagGroup
{
    protected string $id = 'Leica:UserProfile';

    protected string $name = 'UserProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'User Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica2
             * line : 191325
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica2.Leica:UserProfile',
            'desc' => [
                'en' => 'User Profile',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Leica9
             * line : 191693
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica9.Leica:UserProfile',
            'desc' => [
                'en' => 'User Profile',
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 193994
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:UserProfile',
            'desc' => [
                'en' => 'User Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
