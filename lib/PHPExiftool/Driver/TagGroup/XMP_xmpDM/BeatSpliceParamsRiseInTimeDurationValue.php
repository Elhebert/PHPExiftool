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
class BeatSpliceParamsRiseInTimeDurationValue extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:BeatSpliceParamsRiseInTimeDurationValue';

    protected string $name = 'BeatSpliceParamsRiseInTimeDurationValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Beat Splice Params Rise In Time Duration Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291130
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:BeatSpliceParamsRiseInTimeDurationValue',
            'desc' => [
                'en' => 'Beat Splice Params Rise In Time Duration Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
