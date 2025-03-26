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
class Versions extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:Versions';

    protected string $name = 'Versions';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Versions',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292309
             * type : struct
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:Versions',
            'desc' => [
                'en' => 'Versions',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
