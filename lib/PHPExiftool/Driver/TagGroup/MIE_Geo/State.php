<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Geo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class State extends AbstractTagGroup
{
    protected string $id = 'MIE-Geo:State';

    protected string $name = 'State';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'State',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Geo
             * line : 111496
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Geo.MIE-Geo:State',
            'desc' => [
                'en' => 'State',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
