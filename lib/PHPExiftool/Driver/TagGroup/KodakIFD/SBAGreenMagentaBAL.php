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
class SBAGreenMagentaBAL extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:SBAGreenMagentaBAL';

    protected string $name = 'SBAGreenMagentaBAL';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'SBA Green Magenta BAL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107120
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:SBAGreenMagentaBAL',
            'desc' => [
                'en' => 'SBA Green Magenta BAL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
