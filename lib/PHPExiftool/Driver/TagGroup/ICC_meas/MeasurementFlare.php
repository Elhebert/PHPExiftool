<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_meas;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasurementFlare extends AbstractTagGroup
{
    protected string $id = 'ICC-meas:MeasurementFlare';

    protected string $name = 'MeasurementFlare';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Measurement
             * line : 146971
             * type : fixed32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Measurement.ICC-meas:MeasurementFlare',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
