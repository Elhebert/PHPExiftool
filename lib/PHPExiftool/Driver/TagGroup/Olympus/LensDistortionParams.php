<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensDistortionParams extends AbstractTagGroup
{
    protected string $id = 'Olympus:LensDistortionParams';

    protected string $name = 'LensDistortionParams';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Distortion Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177438
             * type : int16s
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:LensDistortionParams',
            'desc' => [
                'en' => 'Lens Distortion Params',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
