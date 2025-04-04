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
class ZoomedPreviewSize extends AbstractTagGroup
{
    protected string $id = 'Olympus:ZoomedPreviewSize';

    protected string $name = 'ZoomedPreviewSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Zoomed Preview Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178518
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ZoomedPreviewSize',
            'desc' => [
                'en' => 'Zoomed Preview Size',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
