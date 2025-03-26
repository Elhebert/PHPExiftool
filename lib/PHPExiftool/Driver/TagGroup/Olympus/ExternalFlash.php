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
class ExternalFlash extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExternalFlash';

    protected string $name = 'ExternalFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 176032
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:ExternalFlash',
            'desc' => [
                'en' => 'External Flash',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
