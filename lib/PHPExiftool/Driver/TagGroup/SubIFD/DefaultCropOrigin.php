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
class DefaultCropOrigin extends AbstractTagGroup
{
    protected string $id = 'SubIFD:DefaultCropOrigin';

    protected string $name = 'DefaultCropOrigin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 119011
             * type : int32u
             * writable : true
             * count : 2
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:DefaultCropOrigin',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2064;
}
