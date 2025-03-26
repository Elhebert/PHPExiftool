<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDevEditStatus extends AbstractTagGroup
{
    protected string $id = 'Olympus:RawDevEditStatus';

    protected string $name = 'RawDevEditStatus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Dev Edit Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawDevelopment
             * line : 179841
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment.Olympus:RawDevEditStatus',
            'desc' => [
                'en' => 'Raw Dev Edit Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
