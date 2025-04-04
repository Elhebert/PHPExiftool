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
class CreateDate extends AbstractTagGroup
{
    protected string $id = 'RTF:CreateDate';

    protected string $name = 'CreateDate';

    protected ?string $phpType = 'date';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Create Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 232026
             * type : date
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:CreateDate',
            'desc' => [
                'en' => 'Create Date',
            ],
        ],
    ];

    protected int $count = 0;
}
