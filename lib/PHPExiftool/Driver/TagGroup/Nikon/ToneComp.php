<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneComp extends AbstractTagGroup
{
    protected string $id = 'Nikon:ToneComp';

    protected string $name = 'ToneComp';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133102
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ToneComp',
            'desc' => [
                'en' => 'Tone Comp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
