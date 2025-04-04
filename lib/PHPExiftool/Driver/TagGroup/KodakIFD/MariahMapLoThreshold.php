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
class MariahMapLoThreshold extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:MariahMapLoThreshold';

    protected string $name = 'MariahMapLoThreshold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mariah Map Lo Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108029
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:MariahMapLoThreshold',
            'desc' => [
                'en' => 'Mariah Map Lo Threshold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
