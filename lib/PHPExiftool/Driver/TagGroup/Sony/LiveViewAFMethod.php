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
class LiveViewAFMethod extends AbstractTagGroup
{
    protected string $id = 'Sony:LiveViewAFMethod';

    protected string $name = 'LiveViewAFMethod';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Live View AF Method',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251440
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:LiveViewAFMethod',
            'desc' => [
                'en' => 'Live View AF Method',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
