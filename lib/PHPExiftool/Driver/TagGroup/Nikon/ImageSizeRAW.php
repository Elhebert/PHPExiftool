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
class ImageSizeRAW extends AbstractTagGroup
{
    protected string $id = 'Nikon:ImageSizeRAW';

    protected string $name = 'ImageSizeRAW';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Size RAW',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133073
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ImageSizeRAW',
            'desc' => [
                'en' => 'Image Size RAW',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
