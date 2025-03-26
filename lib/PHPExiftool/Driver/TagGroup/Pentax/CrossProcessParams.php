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
class CrossProcessParams extends AbstractTagGroup
{
    protected string $id = 'Pentax:CrossProcessParams';

    protected string $name = 'CrossProcessParams';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cross Process Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209694
             * type : undef
             * writable : true
             * count : 10
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:CrossProcessParams',
            'desc' => [
                'en' => 'Cross Process Params',
            ],
        ],
    ];

    protected int $count = 10;

    protected int $flags = 2052;
}
