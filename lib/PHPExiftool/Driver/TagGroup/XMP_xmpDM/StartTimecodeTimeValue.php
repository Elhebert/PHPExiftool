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
class StartTimecodeTimeValue extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:StartTimecodeTimeValue';

    protected string $name = 'StartTimecodeTimeValue';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Start Timecode Time Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291517
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:StartTimecodeTimeValue',
            'desc' => [
                'en' => 'Start Timecode Time Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
