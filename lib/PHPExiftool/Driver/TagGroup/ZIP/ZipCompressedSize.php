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
class ZipCompressedSize extends AbstractTagGroup
{
    protected string $id = 'ZIP:ZipCompressedSize';

    protected string $name = 'ZipCompressedSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Zip Compressed Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ZIP::Main
             * line : 292743
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ZIP::Main.ZIP:ZipCompressedSize',
            'desc' => [
                'en' => 'Zip Compressed Size',
            ],
        ],
    ];

    protected int $count = 0;
}
