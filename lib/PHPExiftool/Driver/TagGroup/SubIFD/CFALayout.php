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
class CFALayout extends AbstractTagGroup
{
    protected string $id = 'SubIFD:CFALayout';

    protected string $name = 'CFALayout';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CFA Layout',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84091
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.SubIFD:CFALayout',
            'desc' => [
                'en' => 'CFA Layout',
            ],
        ],
    ];

    protected int $count = 0;
}
