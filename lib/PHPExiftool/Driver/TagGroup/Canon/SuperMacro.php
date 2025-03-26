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
class SuperMacro extends AbstractTagGroup
{
    protected string $id = 'Canon:SuperMacro';

    protected string $name = 'SuperMacro';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Super Macro',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 49975
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:SuperMacro',
            'desc' => [
                'en' => 'Super Macro',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
