<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InitialAFPointInServo extends AbstractTagGroup
{
    protected string $id = 'Canon:InitialAFPointInServo';

    protected string $name = 'InitialAFPointInServo';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Initial AF Point In Servo',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFConfig
             * line : 2526
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFConfig.Canon:InitialAFPointInServo',
            'desc' => [
                'en' => 'Initial AF Point In Servo',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
