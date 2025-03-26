<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MWG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{
    protected string $id = 'MWG:ModifyDate';

    protected string $name = 'ModifyDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Modify Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65305
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Composite.MWG:ModifyDate',
            'desc' => [
                'en' => 'Modify Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
