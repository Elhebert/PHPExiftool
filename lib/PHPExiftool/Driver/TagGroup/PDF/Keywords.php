<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{
    protected string $id = 'PDF:Keywords';

    protected string $name = 'Keywords';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Keywords',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::Info
             * line : 182645
             * type : string
             * writable : true
             * count :
             * flags : list
             */
            'id' => 'PDF::Info.PDF:Keywords',
            'desc' => [
                'en' => 'Keywords',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
