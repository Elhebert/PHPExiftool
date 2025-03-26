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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 330809
             * type : string
             * writable : true
             * count : 22
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:UserLabel',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 331020
             * type : string
             * writable : true
             * count : 21
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:UserLabel',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 331326
             * type : string
             * writable : true
             * count : 22
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:UserLabel',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
