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
class CodecDefinition extends AbstractTagGroup
{
    protected string $id = 'MXF:CodecDefinition';

    protected string $name = 'CodecDefinition';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Codec Definition',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115875
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:CodecDefinition',
            'desc' => [
                'en' => 'Codec Definition',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117652
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:CodecDefinition',
            'desc' => [
                'en' => 'Codec Definition',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
