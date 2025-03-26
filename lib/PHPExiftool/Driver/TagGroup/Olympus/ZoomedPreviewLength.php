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
class ZoomedPreviewLength extends AbstractTagGroup
{
    protected string $id = 'Olympus:ZoomedPreviewLength';

    protected string $name = 'ZoomedPreviewLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Zoomed Preview Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178515
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.Olympus:ZoomedPreviewLength',
            'desc' => [
                'en' => 'Zoomed Preview Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2060;
}
