<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZipCompression extends AbstractTagGroup
{
    protected string $id = 'ZIP:ZipCompression';

    protected string $name = 'ZipCompression';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Zip Compression',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ZIP::Main
             * line : 292678
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ZIP::Main.ZIP:ZipCompression',
            'desc' => [
                'en' => 'Zip Compression',
            ],
        ],
    ];

    protected int $count = 0;
}
