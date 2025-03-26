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
class FlickerReductionIndicator extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlickerReductionIndicator';

    protected string $name = 'FlickerReductionIndicator';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flicker Reduction Indicator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139340
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:FlickerReductionIndicator',
            'desc' => [
                'en' => 'Flicker Reduction Indicator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
