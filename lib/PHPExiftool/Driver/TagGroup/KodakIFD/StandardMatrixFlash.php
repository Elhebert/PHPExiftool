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
class StandardMatrixFlash extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:StandardMatrixFlash';

    protected string $name = 'StandardMatrixFlash';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Standard Matrix Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106367
             * type : rational64s
             * writable : true
             * count : 9
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:StandardMatrixFlash',
            'desc' => [
                'en' => 'Standard Matrix Flash',
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
