<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation2 extends AbstractTagGroup
{
    protected string $id = 'Sony:Orientation2';

    protected string $name = 'Orientation2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Orientation 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251490
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:Orientation2',
            'desc' => [
                'en' => 'Orientation 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251566
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:Orientation2',
            'desc' => [
                'en' => 'Orientation 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
