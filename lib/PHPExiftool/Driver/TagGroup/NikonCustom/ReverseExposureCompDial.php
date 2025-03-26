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
class ReverseExposureCompDial extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ReverseExposureCompDial';

    protected string $name = 'ReverseExposureCompDial';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Reverse Exposure Comp Dial',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150658
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ReverseExposureCompDial',
            'desc' => [
                'en' => 'Reverse Exposure Comp Dial',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
