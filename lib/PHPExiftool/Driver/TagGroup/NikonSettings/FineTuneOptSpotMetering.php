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
class FineTuneOptSpotMetering extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:FineTuneOptSpotMetering';

    protected string $name = 'FineTuneOptSpotMetering';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fine Tune Opt Spot Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 166810
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
