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
class ISOAutoMin extends AbstractTagGroup
{
    protected string $id = 'Sony:ISOAutoMin';

    protected string $name = 'ISOAutoMin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ISOInfo
             * line : 353457
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ISOInfo.Sony:ISOAutoMin',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
