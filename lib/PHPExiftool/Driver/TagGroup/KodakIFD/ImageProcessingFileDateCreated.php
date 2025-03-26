<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageProcessingFileDateCreated extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ImageProcessingFileDateCreated';

    protected string $name = 'ImageProcessingFileDateCreated';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Processing File Date Created',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107342
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ImageProcessingFileDateCreated',
            'desc' => [
                'en' => 'Image Processing File Date Created',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
