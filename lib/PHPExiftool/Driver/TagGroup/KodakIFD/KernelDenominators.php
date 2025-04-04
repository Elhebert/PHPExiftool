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
class KernelDenominators extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:KernelDenominators';

    protected string $name = 'KernelDenominators';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Kernel Denominators',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106628
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:KernelDenominators',
            'desc' => [
                'en' => 'Kernel Denominators',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
