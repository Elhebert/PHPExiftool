<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Conductor extends AbstractTagGroup
{
    protected string $id = 'Microsoft:Conductor';

    protected string $name = 'Conductor';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Conductor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120497
             * type : Unicode
             * writable : true
             * count :
             * flags : avoid,list
             */
            'id' => 'Microsoft::Xtra.Microsoft:Conductor',
            'desc' => [
                'en' => 'Conductor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
