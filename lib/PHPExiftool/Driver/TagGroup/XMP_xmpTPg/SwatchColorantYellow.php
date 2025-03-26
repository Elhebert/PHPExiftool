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
class SwatchColorantYellow extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:SwatchColorantYellow';

    protected string $name = 'SwatchColorantYellow';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Swatch Colorant Yellow',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292554
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:SwatchColorantYellow',
            'desc' => [
                'en' => 'Swatch Colorant Yellow',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
