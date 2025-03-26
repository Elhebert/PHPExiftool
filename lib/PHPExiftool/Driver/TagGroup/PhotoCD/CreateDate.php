<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTagGroup
{
    protected string $id = 'PhotoCD:CreateDate';

    protected string $name = 'CreateDate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhotoCD::Main
             * line : 303689
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PhotoCD::Main.PhotoCD:CreateDate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
