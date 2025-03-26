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
class Clarity extends AbstractTagGroup
{
    protected string $id = 'Sony:Clarity';

    protected string $name = 'Clarity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Clarity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248299
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Clarity',
            'desc' => [
                'en' => 'Clarity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
