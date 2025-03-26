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
class EasyExposureComp extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:EasyExposureComp';

    protected string $name = 'EasyExposureComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Easy Exposure Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157955
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:EasyExposureComp',
            'desc' => [
                'en' => 'Easy Exposure Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
