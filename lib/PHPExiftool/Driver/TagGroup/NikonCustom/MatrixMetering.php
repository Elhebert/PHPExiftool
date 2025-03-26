<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MatrixMetering extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MatrixMetering';

    protected string $name = 'MatrixMetering';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Matrix Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145442
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147100
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149142
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155593
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156949
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 165585
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:MatrixMetering',
            'desc' => [
                'en' => 'Matrix Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
