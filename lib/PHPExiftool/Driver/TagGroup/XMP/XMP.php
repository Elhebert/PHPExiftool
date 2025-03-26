<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XMP extends AbstractTagGroup
{
    protected string $id = 'XMP:XMP';

    protected string $name = 'XMP';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'XMP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85265
             * type : ?
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Extra.XMP:XMP',
            'desc' => [
                'en' => 'XMP',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
