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
class RepeatingFlashOutputExternal extends AbstractTagGroup
{
    protected string $id = 'Nikon:RepeatingFlashOutputExternal';

    protected string $name = 'RepeatingFlashOutputExternal';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Repeating Flash Output External',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 140479
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:RepeatingFlashOutputExternal',
            'desc' => [
                'en' => 'Repeating Flash Output External',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
