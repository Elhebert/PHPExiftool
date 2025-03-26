<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{
    protected string $id = 'JPEG:PreviewImage';

    protected string $name = 'PreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::Main
             * line : 105026
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::Main.JPEG:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        1 => [
            /**
             * table_name : JPEG::Main
             * line : 105032
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::Main.JPEG:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        2 => [
            /**
             * table_name : JPEG::Main
             * line : 105035
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::Main.JPEG:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        3 => [
            /**
             * table_name : JPEG::Main
             * line : 105041
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::Main.JPEG:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        4 => [
            /**
             * table_name : JPEG::Main
             * line : 105068
             * type : undef
             * writable : true
             * count :
             * flags :
             */
            'id' => 'JPEG::Main.JPEG:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
