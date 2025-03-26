<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AverageLV extends AbstractTagGroup
{
    protected string $id = 'Minolta:AverageLV';

    protected string $name = 'AverageLV';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Average LV',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125817
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:AverageLV',
            'desc' => [
                'en' => 'Average LV',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
