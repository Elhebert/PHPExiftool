<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBAdjBlueAmber extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:WBAdjBlueAmber';

    protected string $name = 'WBAdjBlueAmber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Adj Blue Amber',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58647
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:WBAdjBlueAmber',
            'desc' => [
                'en' => 'WB Adj Blue Amber',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
