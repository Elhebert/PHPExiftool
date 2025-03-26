<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PeripheralIlluminationCorr extends AbstractTagGroup
{
    protected string $id = 'Pentax:PeripheralIlluminationCorr';

    protected string $name = 'PeripheralIlluminationCorr';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Peripheral Illumination Corr',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LensCorr
             * line : 200153
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::LensCorr.Pentax:PeripheralIlluminationCorr',
            'desc' => [
                'en' => 'Peripheral Illumination Corr',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
