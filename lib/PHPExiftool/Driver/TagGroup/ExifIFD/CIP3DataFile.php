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
class CIP3DataFile extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:CIP3DataFile';

    protected string $name = 'CIP3DataFile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CIP3 Data File',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83013
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:CIP3DataFile',
            'desc' => [
                'en' => 'CIP3 Data File',
            ],
        ],
    ];

    protected int $count = 0;
}
