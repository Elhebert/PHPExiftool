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
class MeasurementGeometry extends AbstractTagGroup
{
    protected string $id = 'ICC-meas:MeasurementGeometry';

    protected string $name = 'MeasurementGeometry';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Measurement Geometry',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Measurement
             * line : 102027
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Measurement.ICC-meas:MeasurementGeometry',
            'desc' => [
                'en' => 'Measurement Geometry',
            ],
        ],
    ];

    protected int $count = 0;
}
