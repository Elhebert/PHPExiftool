<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSelection extends AbstractTagGroup
{
    protected string $id = 'Nikon:ISOSelection';

    protected string $name = 'ISOSelection';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Selection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132875
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ISOSelection',
            'desc' => [
                'en' => 'ISO Selection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
