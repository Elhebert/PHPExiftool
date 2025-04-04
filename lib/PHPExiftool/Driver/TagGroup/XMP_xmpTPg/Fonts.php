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
class Fonts extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:Fonts';

    protected string $name = 'Fonts';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fonts',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292444
             * type : struct
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:Fonts',
            'desc' => [
                'en' => 'Fonts',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
