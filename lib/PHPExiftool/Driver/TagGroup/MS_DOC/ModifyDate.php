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
class ModifyDate extends AbstractTagGroup
{
    protected string $id = 'MS-DOC:ModifyDate';

    protected string $name = 'ModifyDate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Modify Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DOP
             * line : 86851
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DOP.MS-DOC:ModifyDate',
            'desc' => [
                'en' => 'Modify Date',
            ],
        ],
        1 => [
            /**
             * table_name : FlashPix::DocTable
             * line : 86931
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DocTable.MS-DOC:ModifyDate',
            'desc' => [
                'en' => 'Modify Date',
            ],
        ],
    ];

    protected int $count = 0;
}
