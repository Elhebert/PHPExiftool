<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RunTimeEpoch extends AbstractTagGroup
{
    protected string $id = 'Apple:RunTimeEpoch';

    protected string $name = 'RunTimeEpoch';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Run Time Epoch',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Apple::RunTime
             * line : 1882
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Apple::RunTime.Apple:RunTimeEpoch',
            'desc' => [
                'en' => 'Run Time Epoch',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
