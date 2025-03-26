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
class SwatchGroupName extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:SwatchGroupName';

    protected string $name = 'SwatchGroupName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Swatch Group Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292557
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:SwatchGroupName',
            'desc' => [
                'en' => 'Swatch Group Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
