<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HasVisibleTransparency extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:HasVisibleTransparency';

    protected string $name = 'HasVisibleTransparency';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 414522
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:HasVisibleTransparency',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
