<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gyroscope extends AbstractTagGroup
{
    protected string $id = 'GoPro:Gyroscope';

    protected string $name = 'Gyroscope';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gyroscope',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97652
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'GoPro::GPMF.GoPro:Gyroscope',
            'desc' => [
                'en' => 'Gyroscope',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
