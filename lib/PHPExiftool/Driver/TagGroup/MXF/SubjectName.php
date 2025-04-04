<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectName extends AbstractTagGroup
{
    protected string $id = 'MXF:SubjectName';

    protected string $name = 'SubjectName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subject Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116448
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SubjectName',
            'desc' => [
                'en' => 'Subject Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116451
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SubjectName',
            'desc' => [
                'en' => 'Subject Name',
            ],
        ],
    ];

    protected int $count = 0;
}
