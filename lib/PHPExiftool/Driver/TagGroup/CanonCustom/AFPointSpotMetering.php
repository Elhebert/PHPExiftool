<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointSpotMetering extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AFPointSpotMetering';

    protected string $name = 'AFPointSpotMetering';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'No. AF Points/Spot Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53657
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:AFPointSpotMetering',
            'desc' => [
                'en' => 'No. AF Points/Spot Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
