<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{
    protected string $id = 'RTF:ModifyDate';

    protected string $name = 'ModifyDate';

    protected ?string $phpType = 'date';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Modify Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 232065
             * type : date
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:ModifyDate',
            'desc' => [
                'en' => 'Modify Date',
            ],
        ],
    ];

    protected int $count = 0;
}
