<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageDataSize extends AbstractTagGroup
{
    protected string $id = 'Nikon:ImageDataSize';

    protected string $name = 'ImageDataSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Data Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 134559
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ImageDataSize',
            'desc' => [
                'en' => 'Image Data Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
