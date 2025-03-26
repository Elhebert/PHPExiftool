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
class TranscriptReference extends AbstractTagGroup
{
    protected string $id = 'MXF:TranscriptReference';

    protected string $name = 'TranscriptReference';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Transcript Reference',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116619
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TranscriptReference',
            'desc' => [
                'en' => 'Transcript Reference',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116622
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TranscriptReference',
            'desc' => [
                'en' => 'Transcript Reference',
            ],
        ],
    ];

    protected int $count = 0;
}
