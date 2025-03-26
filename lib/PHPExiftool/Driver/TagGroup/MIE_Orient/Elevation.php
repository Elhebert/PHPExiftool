<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Orient;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Elevation extends AbstractTagGroup
{
    protected string $id = 'MIE-Orient:Elevation';

    protected string $name = 'Elevation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Elevation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Orient
             * line : 111611
             * type : rational64s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Orient.MIE-Orient:Elevation',
            'desc' => [
                'en' => 'Elevation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
