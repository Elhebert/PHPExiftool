<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieAFTrackingSensitivity extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:MovieAFTrackingSensitivity';

    protected string $name = 'MovieAFTrackingSensitivity';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Movie AF Tracking Sensitivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 170000
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MovieAFTrackingSensitivity',
            'desc' => [
                'en' => 'Movie AF Tracking Sensitivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
