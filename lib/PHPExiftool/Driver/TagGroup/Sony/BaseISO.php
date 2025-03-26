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
class BaseISO extends AbstractTagGroup
{
    protected string $id = 'Sony:BaseISO';

    protected string $name = 'BaseISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Base ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273686
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:BaseISO',
            'desc' => [
                'en' => 'Base ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
