<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rotation extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Rotation';

    protected string $name = 'Rotation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemPropCont
             * line : 228536
             * type : int8u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'QuickTime::ItemPropCont.QuickTime:Rotation',
            'desc' => [
                'en' => 'Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
