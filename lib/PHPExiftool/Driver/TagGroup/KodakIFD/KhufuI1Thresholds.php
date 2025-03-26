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
class KhufuI1Thresholds extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:KhufuI1Thresholds';

    protected string $name = 'KhufuI1Thresholds';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Khufu I1 Thresholds',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108080
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:KhufuI1Thresholds',
            'desc' => [
                'en' => 'Khufu I1 Thresholds',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
