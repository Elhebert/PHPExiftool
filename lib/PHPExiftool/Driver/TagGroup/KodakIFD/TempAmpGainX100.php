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
class TempAmpGainX100 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:TempAmpGainX100';

    protected string $name = 'TempAmpGainX100';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Temp Amp Gain X100',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108521
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:TempAmpGainX100',
            'desc' => [
                'en' => 'Temp Amp Gain X100',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
