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
class DownSampleBy4Ver extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:DownSampleBy4Ver';

    protected string $name = 'DownSampleBy4Ver';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Down Sample By 4 Ver',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106652
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:DownSampleBy4Ver',
            'desc' => [
                'en' => 'Down Sample By 4 Ver',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
