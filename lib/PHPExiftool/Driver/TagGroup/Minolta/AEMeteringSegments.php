<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEMeteringSegments extends AbstractTagGroup
{
    protected string $id = 'Minolta:AEMeteringSegments';

    protected string $name = 'AEMeteringSegments';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Metering Segments',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125931
             * type : int8u
             * writable : true
             * count : 40
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:AEMeteringSegments',
            'desc' => [
                'en' => 'AE Metering Segments',
            ],
        ],
    ];

    protected int $count = 40;

    protected int $flags = 2052;
}
