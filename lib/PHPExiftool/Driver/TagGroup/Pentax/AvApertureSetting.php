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
class AvApertureSetting extends AbstractTagGroup
{
    protected string $id = 'Pentax:AvApertureSetting';

    protected string $name = 'AvApertureSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Av Aperture Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::CameraSettings
             * line : 197963
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraSettings.Pentax:AvApertureSetting',
            'desc' => [
                'en' => 'Av Aperture Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
