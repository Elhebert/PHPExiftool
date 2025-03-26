<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileIndex extends AbstractTagGroup
{
    protected string $id = 'Leica:FileIndex';

    protected string $name = 'FileIndex';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::ShotInfo
             * line : 193872
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::ShotInfo.Leica:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
