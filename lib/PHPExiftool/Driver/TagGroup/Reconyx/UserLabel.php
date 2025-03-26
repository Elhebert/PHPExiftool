<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserLabel extends AbstractTagGroup
{
    protected string $id = 'Reconyx:UserLabel';

    protected string $name = 'UserLabel';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'User Label',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232712
             * type : string
             * writable : true
             * count : 22
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:UserLabel',
            'desc' => [
                'en' => 'User Label',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232832
             * type : string
             * writable : true
             * count : 21
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:UserLabel',
            'desc' => [
                'en' => 'User Label',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232976
             * type : string
             * writable : true
             * count : 22
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:UserLabel',
            'desc' => [
                'en' => 'User Label',
            ],
        ],
    ];

    protected int $flags = 2052;
}
