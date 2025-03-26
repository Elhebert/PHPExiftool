<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MS_DOC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CommentBy extends AbstractTagGroup
{
    protected string $id = 'MS-DOC:CommentBy';

    protected string $name = 'CommentBy';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DocTable
             * line : 124401
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DocTable.MS-DOC:CommentBy',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
