<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Genre extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:Genre';

    protected string $name = 'Genre';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Genre',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291217
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:Genre',
            'desc' => [
                'en' => 'Genre',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
