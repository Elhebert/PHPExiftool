<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CFAPlaneColor extends AbstractTagGroup
{
    protected string $id = 'SubIFD:CFAPlaneColor';

    protected string $name = 'CFAPlaneColor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CFA Plane Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84088
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.SubIFD:CFAPlaneColor',
            'desc' => [
                'en' => 'CFA Plane Color',
            ],
        ],
    ];

    protected int $count = 0;
}
