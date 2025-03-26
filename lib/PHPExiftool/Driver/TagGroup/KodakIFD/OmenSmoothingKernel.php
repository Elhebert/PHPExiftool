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
class OmenSmoothingKernel extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OmenSmoothingKernel';

    protected string $name = 'OmenSmoothingKernel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Omen Smoothing Kernel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106901
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:OmenSmoothingKernel',
            'desc' => [
                'en' => 'Omen Smoothing Kernel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
