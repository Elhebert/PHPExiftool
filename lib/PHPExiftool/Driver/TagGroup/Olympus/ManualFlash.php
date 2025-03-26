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
class ManualFlash extends AbstractTagGroup
{
    protected string $id = 'Olympus:ManualFlash';

    protected string $name = 'ManualFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 255095
             * type : int16u
             * writable : false
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:ManualFlash',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 4;
}
