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
class FlickerReduction extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlickerReduction';

    protected string $name = 'FlickerReduction';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flicker Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139924
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:FlickerReduction',
            'desc' => [
                'en' => 'Flicker Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
