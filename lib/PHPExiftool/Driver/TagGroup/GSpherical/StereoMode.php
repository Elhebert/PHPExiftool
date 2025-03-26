<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GSpherical;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StereoMode extends AbstractTagGroup
{
    protected string $id = 'GSpherical:StereoMode';

    protected string $name = 'StereoMode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Stereo Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GSpherical
             * line : 281316
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GSpherical.GSpherical:StereoMode',
            'desc' => [
                'en' => 'Stereo Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
