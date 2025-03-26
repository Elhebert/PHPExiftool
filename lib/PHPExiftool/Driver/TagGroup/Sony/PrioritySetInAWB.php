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
class PrioritySetInAWB extends AbstractTagGroup
{
    protected string $id = 'Sony:PrioritySetInAWB';

    protected string $name = 'PrioritySetInAWB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Priority Set In AWB',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248201
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:PrioritySetInAWB',
            'desc' => [
                'en' => 'Priority Set In AWB',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
