<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTagGroup
{
    protected string $id = 'PhaseOne:DateTimeOriginal';

    protected string $name = 'DateTimeOriginal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date/Time Original',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhaseOne::Main
             * line : 210816
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'PhaseOne::Main.PhaseOne:DateTimeOriginal',
            'desc' => [
                'en' => 'Date/Time Original',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
