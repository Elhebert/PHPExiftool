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
class WhiteBalanceMode extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:WhiteBalanceMode';

    protected string $name = 'WhiteBalanceMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106134
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Kodak::IFD.KodakIFD:WhiteBalanceMode',
            'desc' => [
                'en' => 'White Balance Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
