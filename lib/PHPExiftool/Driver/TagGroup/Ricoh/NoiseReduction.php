<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReduction extends AbstractTagGroup
{
    protected string $id = 'Ricoh:NoiseReduction';

    protected string $name = 'NoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Main
             * line : 233644
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Ricoh::Subdir
             * line : 234033
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Subdir.Ricoh:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
