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
class QTableSmall67Pct extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:QTableSmall67Pct';

    protected string $name = 'QTableSmall67Pct';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Q Table Small 67 Pct',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107171
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:QTableSmall67Pct',
            'desc' => [
                'en' => 'Q Table Small 67 Pct',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
