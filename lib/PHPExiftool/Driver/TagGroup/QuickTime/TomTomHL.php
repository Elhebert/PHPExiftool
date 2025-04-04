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
class TomTomHL extends AbstractTagGroup
{
    protected string $id = 'QuickTime:TomTomHL';

    protected string $name = 'TomTomHL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Tom Tom HL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::TomTom
             * line : 229474
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::TomTom.QuickTime:TomTomHL',
            'desc' => [
                'en' => 'Tom Tom HL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
