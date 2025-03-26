<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SupportsAmount extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:SupportsAmount';

    protected string $name = 'SupportsAmount';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Supports Amount',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284525
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:SupportsAmount',
            'desc' => [
                'en' => 'Supports Amount',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
