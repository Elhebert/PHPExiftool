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
class MakerNoteVersion extends AbstractTagGroup
{
    protected string $id = 'Sony:MakerNoteVersion';

    protected string $name = 'MakerNoteVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Ericsson
             * line : 245992
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::Ericsson.Sony:MakerNoteVersion',
            'desc' => [
                'en' => 'Maker Note Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
