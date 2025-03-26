<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensType extends AbstractTagGroup
{
    protected string $id = 'Olympus:LensType';

    protected string $name = 'LensType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Equipment
             * line : 175332
             * type : int8u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Olympus::Equipment.Olympus:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
