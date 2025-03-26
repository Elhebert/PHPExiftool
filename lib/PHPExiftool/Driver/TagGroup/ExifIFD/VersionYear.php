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
class VersionYear extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:VersionYear';

    protected string $name = 'VersionYear';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Version Year',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81949
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:VersionYear',
            'desc' => [
                'en' => 'Version Year',
            ],
        ],
    ];

    protected int $count = 0;
}
