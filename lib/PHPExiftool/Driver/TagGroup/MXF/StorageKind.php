<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StorageKind extends AbstractTagGroup
{
    protected string $id = 'MXF:StorageKind';

    protected string $name = 'StorageKind';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Storage Kind',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116571
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StorageKind',
            'desc' => [
                'en' => 'Storage Kind',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116574
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StorageKind',
            'desc' => [
                'en' => 'Storage Kind',
            ],
        ],
    ];

    protected int $count = 0;
}
