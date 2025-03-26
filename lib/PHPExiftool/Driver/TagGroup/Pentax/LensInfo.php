<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensInfo extends AbstractTagGroup
{
    protected string $id = 'Pentax:LensInfo';

    protected string $name = 'LensInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LensInfoQ
             * line : 204928
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Pentax::LensInfoQ.Pentax:LensInfo',
            'desc' => [
                'en' => 'Lens Info',
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
