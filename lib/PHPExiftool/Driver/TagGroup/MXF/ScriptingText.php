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
class ScriptingText extends AbstractTagGroup
{
    protected string $id = 'MXF:ScriptingText';

    protected string $name = 'ScriptingText';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scripting Text',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117366
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ScriptingText',
            'desc' => [
                'en' => 'Scripting Text',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117369
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ScriptingText',
            'desc' => [
                'en' => 'Scripting Text',
            ],
        ],
    ];

    protected int $count = 0;
}
