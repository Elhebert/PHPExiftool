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
class ManagedFromAlternatePaths extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:ManagedFromAlternatePaths';

    protected string $name = 'ManagedFromAlternatePaths';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Managed From Alternate Paths',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292018
             * type : string
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:ManagedFromAlternatePaths',
            'desc' => [
                'en' => 'Managed From Alternate Paths',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
