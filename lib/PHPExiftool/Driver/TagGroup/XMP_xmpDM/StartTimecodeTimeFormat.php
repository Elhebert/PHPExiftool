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
class StartTimecodeTimeFormat extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:StartTimecodeTimeFormat';

    protected string $name = 'StartTimecodeTimeFormat';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Start Timecode Time Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291482
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:StartTimecodeTimeFormat',
            'desc' => [
                'en' => 'Start Timecode Time Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
