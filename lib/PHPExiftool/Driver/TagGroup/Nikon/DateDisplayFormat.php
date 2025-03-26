<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateDisplayFormat extends AbstractTagGroup
{
    protected string $id = 'Nikon:DateDisplayFormat';

    protected string $name = 'DateDisplayFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date Display Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::WorldTime
             * line : 141382
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::WorldTime.Nikon:DateDisplayFormat',
            'desc' => [
                'en' => 'Date Display Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
