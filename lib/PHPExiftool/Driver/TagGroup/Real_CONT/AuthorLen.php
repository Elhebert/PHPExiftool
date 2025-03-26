<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_CONT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AuthorLen extends AbstractTagGroup
{
    protected string $id = 'Real-CONT:AuthorLen';

    protected string $name = 'AuthorLen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Author Len',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::ContentDescr
             * line : 232367
             * type : int16u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::ContentDescr.Real-CONT:AuthorLen',
            'desc' => [
                'en' => 'Author Len',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
