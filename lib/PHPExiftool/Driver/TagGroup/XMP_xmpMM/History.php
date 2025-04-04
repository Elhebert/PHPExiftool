<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class History extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:History';

    protected string $name = 'History';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'History',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 291908
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:History',
            'desc' => [
                'en' => 'History',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
