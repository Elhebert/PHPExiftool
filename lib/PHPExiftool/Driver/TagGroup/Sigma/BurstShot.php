<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BurstShot extends AbstractTagGroup
{
    protected string $id = 'Sigma:BurstShot';

    protected string $name = 'BurstShot';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Burst Shot',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 237356
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:BurstShot',
            'desc' => [
                'en' => 'Burst Shot',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
