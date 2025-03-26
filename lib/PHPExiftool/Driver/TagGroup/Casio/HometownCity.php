<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HometownCity extends AbstractTagGroup
{
    protected string $id = 'Casio:HometownCity';

    protected string $name = 'HometownCity';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hometown City',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 62316
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:HometownCity',
            'desc' => [
                'en' => 'Hometown City',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
