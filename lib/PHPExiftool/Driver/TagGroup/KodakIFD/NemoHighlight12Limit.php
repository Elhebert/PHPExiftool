<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NemoHighlight12Limit extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:NemoHighlight12Limit';

    protected string $name = 'NemoHighlight12Limit';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nemo Highlight 12 Limit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106793
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:NemoHighlight12Limit',
            'desc' => [
                'en' => 'Nemo Highlight 12 Limit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
