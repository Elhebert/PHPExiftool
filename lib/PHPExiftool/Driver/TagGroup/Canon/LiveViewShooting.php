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
class LiveViewShooting extends AbstractTagGroup
{
    protected string $id = 'Canon:LiveViewShooting';

    protected string $name = 'LiveViewShooting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Live View Shooting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48422
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:LiveViewShooting',
            'desc' => [
                'en' => 'Live View Shooting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
