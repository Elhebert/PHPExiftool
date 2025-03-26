<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DefaultCropSize extends AbstractTagGroup
{
    protected string $id = 'SubIFD:DefaultCropSize';

    protected string $name = 'DefaultCropSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 119021
             * type : int32u
             * writable : true
             * count : 2
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:DefaultCropSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2064;
}
