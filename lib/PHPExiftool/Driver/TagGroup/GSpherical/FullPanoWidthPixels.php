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
class FullPanoWidthPixels extends AbstractTagGroup
{
    protected string $id = 'GSpherical:FullPanoWidthPixels';

    protected string $name = 'FullPanoWidthPixels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Full Pano Width Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GSpherical
             * line : 281295
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GSpherical.GSpherical:FullPanoWidthPixels',
            'desc' => [
                'en' => 'Full Pano Width Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
