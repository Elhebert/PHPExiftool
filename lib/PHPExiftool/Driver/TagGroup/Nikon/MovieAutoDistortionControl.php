<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieAutoDistortionControl extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieAutoDistortionControl';

    protected string $name = 'MovieAutoDistortionControl';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Auto Distortion Control',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 135256
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieAutoDistortionControl',
            'desc' => [
                'en' => 'Movie Auto Distortion Control',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
