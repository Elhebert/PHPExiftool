<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReleaseMode extends AbstractTagGroup
{
    protected string $id = 'Sony:ReleaseMode';

    protected string $name = 'ReleaseMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Release Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 250588
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:ReleaseMode',
            'desc' => [
                'en' => 'Release Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
