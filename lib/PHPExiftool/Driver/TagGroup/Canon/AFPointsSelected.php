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
class AFPointsSelected extends AbstractTagGroup
{
    protected string $id = 'Canon:AFPointsSelected';

    protected string $name = 'AFPointsSelected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AF Points Selected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 2673
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo2.Canon:AFPointsSelected',
            'desc' => [
                'en' => 'AF Points Selected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
