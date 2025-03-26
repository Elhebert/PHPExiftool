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
class WB_RGBLevelsAsShot extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:WB_RGBLevelsAsShot';

    protected string $name = 'WB_RGBLevelsAsShot';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB RGB Levels As Shot',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106439
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:WB_RGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGB Levels As Shot',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
