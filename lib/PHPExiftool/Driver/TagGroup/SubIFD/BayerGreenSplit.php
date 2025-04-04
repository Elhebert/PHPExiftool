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
class BayerGreenSplit extends AbstractTagGroup
{
    protected string $id = 'SubIFD:BayerGreenSplit';

    protected string $name = 'BayerGreenSplit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bayer Green Split',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84186
             * type : int32u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:BayerGreenSplit',
            'desc' => [
                'en' => 'Bayer Green Split',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
