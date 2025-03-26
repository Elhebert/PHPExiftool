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
class SwatchColorantCyan extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:SwatchColorantCyan';

    protected string $name = 'SwatchColorantCyan';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Swatch Colorant Cyan',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292513
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:SwatchColorantCyan',
            'desc' => [
                'en' => 'Swatch Colorant Cyan',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
