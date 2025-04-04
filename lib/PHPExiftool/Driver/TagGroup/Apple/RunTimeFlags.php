<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RunTimeFlags extends AbstractTagGroup
{
    protected string $id = 'Apple:RunTimeFlags';

    protected string $name = 'RunTimeFlags';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Run Time Flags',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Apple::RunTime
             * line : 1885
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Apple::RunTime.Apple:RunTimeFlags',
            'desc' => [
                'en' => 'Run Time Flags',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
