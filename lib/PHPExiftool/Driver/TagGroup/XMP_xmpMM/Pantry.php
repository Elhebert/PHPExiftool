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
class Pantry extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:Pantry';

    protected string $name = 'Pantry';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pantry',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292205
             * type : struct
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:Pantry',
            'desc' => [
                'en' => 'Pantry',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
