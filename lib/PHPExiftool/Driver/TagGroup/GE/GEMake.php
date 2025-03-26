<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GEMake extends AbstractTagGroup
{
    protected string $id = 'GE:GEMake';

    protected string $name = 'GEMake';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GE Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GE::Main
             * line : 90622
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'GE::Main.GE:GEMake',
            'desc' => [
                'en' => 'GE Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
