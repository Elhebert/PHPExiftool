<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreationTime extends AbstractTagGroup
{
    protected string $id = 'PNG:CreationTime';

    protected string $name = 'CreationTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creation Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::TextualData
             * line : 190536
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PNG::TextualData.PNG:CreationTime',
            'desc' => [
                'en' => 'Creation Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
