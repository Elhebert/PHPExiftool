<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Manager extends AbstractTagGroup
{
    protected string $id = 'RTF:Manager';

    protected string $name = 'Manager';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Manager',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 232044
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:Manager',
            'desc' => [
                'en' => 'Manager',
            ],
        ],
    ];

    protected int $count = 0;
}
