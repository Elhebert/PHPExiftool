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
class VddimDacNominalValues extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:VddimDacNominalValues';

    protected string $name = 'VddimDacNominalValues';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Vddim Dac Nominal Values',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108527
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:VddimDacNominalValues',
            'desc' => [
                'en' => 'Vddim Dac Nominal Values',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
