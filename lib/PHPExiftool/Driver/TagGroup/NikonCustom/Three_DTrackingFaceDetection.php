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
class Three_DTrackingFaceDetection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Three-DTrackingFaceDetection';

    protected string $name = 'Three-DTrackingFaceDetection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Three-D Tracking Face Detection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146011
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:Three-DTrackingFaceDetection',
            'desc' => [
                'en' => 'Three-D Tracking Face Detection',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148043
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:Three-DTrackingFaceDetection',
            'desc' => [
                'en' => 'Three-D Tracking Face Detection',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155826
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:Three-DTrackingFaceDetection',
            'desc' => [
                'en' => 'Three-D Tracking Face Detection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
