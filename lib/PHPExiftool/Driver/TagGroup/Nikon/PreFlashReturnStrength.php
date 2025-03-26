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
class PreFlashReturnStrength extends AbstractTagGroup
{
    protected string $id = 'Nikon:PreFlashReturnStrength';

    protected string $name = 'PreFlashReturnStrength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pre Flash Return Strength',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138637
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:PreFlashReturnStrength',
            'desc' => [
                'en' => 'Pre Flash Return Strength',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
