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
class SwatchColorantRed extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:SwatchColorantRed';

    protected string $name = 'SwatchColorantRed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Swatch Colorant Red',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292542
             * type : integer
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:SwatchColorantRed',
            'desc' => [
                'en' => 'Swatch Colorant Red',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
