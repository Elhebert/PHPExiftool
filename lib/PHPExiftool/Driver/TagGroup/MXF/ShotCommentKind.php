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
class ShotCommentKind extends AbstractTagGroup
{
    protected string $id = 'MXF:ShotCommentKind';

    protected string $name = 'ShotCommentKind';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shot Comment Kind',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115442
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotCommentKind',
            'desc' => [
                'en' => 'Shot Comment Kind',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117934
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ShotCommentKind',
            'desc' => [
                'en' => 'Shot Comment Kind',
            ],
        ],
    ];

    protected int $count = 0;
}
