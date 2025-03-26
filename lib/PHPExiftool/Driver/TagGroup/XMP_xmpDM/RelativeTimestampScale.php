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
class RelativeTimestampScale extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:RelativeTimestampScale';

    protected string $name = 'RelativeTimestampScale';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Relative Timestamp Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291412
             * type : rational
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:RelativeTimestampScale',
            'desc' => [
                'en' => 'Relative Timestamp Scale',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
