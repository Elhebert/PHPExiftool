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
class MariahMapHiThreshold extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:MariahMapHiThreshold';

    protected string $name = 'MariahMapHiThreshold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mariah Map Hi Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108032
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:MariahMapHiThreshold',
            'desc' => [
                'en' => 'Mariah Map Hi Threshold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
