<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDataUniqueID extends AbstractTagGroup
{
    protected string $id = 'IFD0:RawDataUniqueID';

    protected string $name = 'RawDataUniqueID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Data Unique ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84372
             * type : int8u
             * writable : true
             * count : 16
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:RawDataUniqueID',
            'desc' => [
                'en' => 'Raw Data Unique ID',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 2064;
}
