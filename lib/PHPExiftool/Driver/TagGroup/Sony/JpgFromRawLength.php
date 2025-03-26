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
class JpgFromRawLength extends AbstractTagGroup
{
    protected string $id = 'Sony:JpgFromRawLength';

    protected string $name = 'JpgFromRawLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::PMP
             * line : 361294
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:JpgFromRawLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
