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
class TracksMarkersCuePointParamsKey extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:TracksMarkersCuePointParamsKey';

    protected string $name = 'TracksMarkersCuePointParamsKey';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tracks Markers Cue Point Params Key',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291631
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:TracksMarkersCuePointParamsKey',
            'desc' => [
                'en' => 'Tracks Markers Cue Point Params Key',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
