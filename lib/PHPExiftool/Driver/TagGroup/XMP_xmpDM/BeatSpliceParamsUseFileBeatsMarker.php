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
class BeatSpliceParamsUseFileBeatsMarker extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:BeatSpliceParamsUseFileBeatsMarker';

    protected string $name = 'BeatSpliceParamsUseFileBeatsMarker';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Beat Splice Params Use File Beats Marker',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291133
             * type : boolean
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:BeatSpliceParamsUseFileBeatsMarker',
            'desc' => [
                'en' => 'Beat Splice Params Use File Beats Marker',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
