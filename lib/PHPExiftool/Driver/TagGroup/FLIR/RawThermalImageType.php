<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawThermalImageType extends AbstractTagGroup
{
    protected string $id = 'FLIR:RawThermalImageType';

    protected string $name = 'RawThermalImageType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Raw Thermal Image Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::RawData
             * line : 86486
             * type : undef
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::RawData.FLIR:RawThermalImageType',
            'desc' => [
                'en' => 'Raw Thermal Image Type',
            ],
        ],
    ];

    protected int $count = 0;
}
