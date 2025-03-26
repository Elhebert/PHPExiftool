<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CommentLen extends AbstractTagGroup
{
    protected string $id = 'Real-RA4:CommentLen';

    protected string $name = 'CommentLen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Comment Len',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV4
             * line : 232293
             * type : int8u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:CommentLen',
            'desc' => [
                'en' => 'Comment Len',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
