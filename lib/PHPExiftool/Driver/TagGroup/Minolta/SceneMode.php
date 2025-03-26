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
class SceneMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:SceneMode';

    protected string $name = 'SceneMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::Main
             * line : 124308
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:SceneMode',
            'desc' => [
                'en' => 'Scene Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
