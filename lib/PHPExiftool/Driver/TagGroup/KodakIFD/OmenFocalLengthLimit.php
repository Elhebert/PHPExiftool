<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OmenFocalLengthLimit extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OmenFocalLengthLimit';

    protected string $name = 'OmenFocalLengthLimit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Omen Focal Length Limit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106874
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:OmenFocalLengthLimit',
            'desc' => [
                'en' => 'Omen Focal Length Limit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
