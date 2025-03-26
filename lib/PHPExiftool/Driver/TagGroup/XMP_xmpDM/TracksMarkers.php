<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TracksMarkers extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TracksMarkers';

    protected string $name = 'TracksMarkers';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tracks Markers',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291622
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TracksMarkers',
            'desc' => [
                'en' => 'Tracks Markers',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
