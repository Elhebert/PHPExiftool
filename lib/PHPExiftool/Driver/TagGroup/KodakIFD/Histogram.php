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
class Histogram extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:Histogram';

    protected string $name = 'Histogram';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Histogram',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106208
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'Kodak::IFD.KodakIFD:Histogram',
            'desc' => [
                'en' => 'Histogram',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 38;
}
