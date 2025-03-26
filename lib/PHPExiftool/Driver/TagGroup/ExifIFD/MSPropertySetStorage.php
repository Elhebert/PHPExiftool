<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MSPropertySetStorage extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MSPropertySetStorage';

    protected string $name = 'MSPropertySetStorage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MS Property Set Storage',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83313
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MSPropertySetStorage',
            'desc' => [
                'en' => 'MS Property Set Storage',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
