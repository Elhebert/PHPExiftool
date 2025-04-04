<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensProfileMatchKeyLensInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:LensProfileMatchKeyLensInfo';

    protected string $name = 'LensProfileMatchKeyLensInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Profile Match Key Lens Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285981
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:LensProfileMatchKeyLensInfo',
            'desc' => [
                'en' => 'Lens Profile Match Key Lens Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
