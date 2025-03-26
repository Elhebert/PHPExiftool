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
class BaseISOTungsten extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:BaseISOTungsten';

    protected string $name = 'BaseISOTungsten';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Base ISO Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106580
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:BaseISOTungsten',
            'desc' => [
                'en' => 'Base ISO Tungsten',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
